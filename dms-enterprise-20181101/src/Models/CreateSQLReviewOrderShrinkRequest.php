<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateSQLReviewOrderShrinkRequest extends Model
{
    /**
     * @description The purpose or objective of the SQL review. This reduces unnecessary communication.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The parameters of the ticket.
     *
     * @var string
     */
    public $paramShrink;

    /**
     * @description The stakeholders involved in this operation. All the specified stakeholders can view the ticket details and take part in the approval process. Irrelevant users other than DMS administrators and database administrators (DBAs) are not allowed to view the ticket details.
     *
     * @var string
     */
    public $relatedUserListShrink;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to obtain the tenant ID.
     *
     * @example 1
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'comment'               => 'Comment',
        'paramShrink'           => 'Param',
        'relatedUserListShrink' => 'RelatedUserList',
        'tid'                   => 'Tid',
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
        if (null !== $this->paramShrink) {
            $res['Param'] = $this->paramShrink;
        }
        if (null !== $this->relatedUserListShrink) {
            $res['RelatedUserList'] = $this->relatedUserListShrink;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSQLReviewOrderShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Param'])) {
            $model->paramShrink = $map['Param'];
        }
        if (isset($map['RelatedUserList'])) {
            $model->relatedUserListShrink = $map['RelatedUserList'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
