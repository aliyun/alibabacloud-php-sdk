<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateDataCronClearOrderRequest\param;
use AlibabaCloud\Tea\Model;

class CreateDataCronClearOrderRequest extends Model
{
    /**
     * @description The key of the attachment for the ticket. The attachment provides more instructions for this operation.
     *
     * You can call the [GetUserUploadFileJob](https://help.aliyun.com/document_detail/206069.html) operation to query the key of the attachment.
     * @example order_attachement.txt
     *
     * @var string
     */
    public $attachmentKey;

    /**
     * @description The purpose or objective of the data change. This reduces unnecessary communication.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The parameters of the ticket.
     *
     * This parameter is required.
     * @var param
     */
    public $param;

    /**
     * @description The stakeholders of this operation. All stakeholders can view the ticket details and assist in the approval process. Irrelevant users other than Data Management (DMS) administrators and database administrators (DBAs) are not allowed to view the ticket details.
     *
     * @var int[]
     */
    public $relatedUserList;

    /**
     * @description The ID of the tenant.
     *
     * >  The ID of the tenant is displayed when you move the pointer over the profile picture in the upper-right corner of the DMS console. For more information, see the [View information about the current tenant](https://help.aliyun.com/document_detail/181330.html) section of the Manage DMS tenants topic.
     * @example 123454324
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey'   => 'AttachmentKey',
        'comment'         => 'Comment',
        'param'           => 'Param',
        'relatedUserList' => 'RelatedUserList',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentKey) {
            $res['AttachmentKey'] = $this->attachmentKey;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->param) {
            $res['Param'] = null !== $this->param ? $this->param->toMap() : null;
        }
        if (null !== $this->relatedUserList) {
            $res['RelatedUserList'] = $this->relatedUserList;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDataCronClearOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentKey'])) {
            $model->attachmentKey = $map['AttachmentKey'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Param'])) {
            $model->param = param::fromMap($map['Param']);
        }
        if (isset($map['RelatedUserList'])) {
            if (!empty($map['RelatedUserList'])) {
                $model->relatedUserList = $map['RelatedUserList'];
            }
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
