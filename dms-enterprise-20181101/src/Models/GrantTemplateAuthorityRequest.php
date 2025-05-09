<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class GrantTemplateAuthorityRequest extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $expireDate;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $userIds;
    protected $_name = [
        'comment' => 'Comment',
        'expireDate' => 'ExpireDate',
        'templateId' => 'TemplateId',
        'tid' => 'Tid',
        'userIds' => 'UserIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
