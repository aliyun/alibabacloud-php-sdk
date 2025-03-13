<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateStructSyncOrderRequest\param;
use AlibabaCloud\Tea\Model;

class CreateStructSyncOrderRequest extends Model
{
    /**
     * @description The key of an attachment that is returned after the attachment is uploaded. You can call the [GetUserUploadFileJob](https://help.aliyun.com/document_detail/206069.html) operation to query the key of the attachment.
     *
     * @example upload_3c7edea3-e4c3-4403-857d-737043036f69_test.sql
     *
     * @var string
     */
    public $attachmentKey;

    /**
     * @description The remarks of the ticket.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The parameters of the ticket.
     *
     * This parameter is required.
     *
     * @var param
     */
    public $param;

    /**
     * @description The IDs of the stakeholders.
     *
     * @var int[]
     */
    public $relatedUserList;

    /**
     * @description The ID of the tenant.
     *
     * >  To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the DMS console. For more information, see [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html).
     *
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'attachmentKey' => 'AttachmentKey',
        'comment' => 'Comment',
        'param' => 'Param',
        'relatedUserList' => 'RelatedUserList',
        'tid' => 'Tid',
    ];

    public function validate(): void {}

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
     * @return CreateStructSyncOrderRequest
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
