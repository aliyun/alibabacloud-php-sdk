<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Dara\Model;

class DeleteAppMemberRequest extends Model
{
    /**
     * @var string
     */
    public $organizationId;
    /**
     * @var string
     */
    public $subjectId;
    /**
     * @var string
     */
    public $subjectType;
    protected $_name = [
        'organizationId' => 'organizationId',
        'subjectId'      => 'subjectId',
        'subjectType'    => 'subjectType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->organizationId) {
            $res['organizationId'] = $this->organizationId;
        }

        if (null !== $this->subjectId) {
            $res['subjectId'] = $this->subjectId;
        }

        if (null !== $this->subjectType) {
            $res['subjectType'] = $this->subjectType;
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
        if (isset($map['organizationId'])) {
            $model->organizationId = $map['organizationId'];
        }

        if (isset($map['subjectId'])) {
            $model->subjectId = $map['subjectId'];
        }

        if (isset($map['subjectType'])) {
            $model->subjectType = $map['subjectType'];
        }

        return $model;
    }
}
