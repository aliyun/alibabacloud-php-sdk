<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class GrantTemplateAuthorityRequest extends Model
{
    /**
     * @description The reason why you want to grant permissions on resources to the users by using the permission template.
     *
     * @example Business test.
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the permission expires. Specify the time in the yyyy-MM-DD HH:mm:ss format.
     *
     * @example 2023-03-08 17:58:53
     *
     * @var string
     */
    public $expireDate;

    /**
     * @description The ID of the permission template.
     *
     * @example 1563
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The IDs of users to which you want to grant permissions on resources by using the permission template.
     *
     * @example [12***,34***,56***]
     *
     * @var string
     */
    public $userIds;
    protected $_name = [
        'comment'    => 'Comment',
        'expireDate' => 'ExpireDate',
        'templateId' => 'TemplateId',
        'tid'        => 'Tid',
        'userIds'    => 'UserIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GrantTemplateAuthorityRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }

        return $model;
    }
}
