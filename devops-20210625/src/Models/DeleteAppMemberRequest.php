<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models;

use AlibabaCloud\Tea\Model;

class DeleteAppMemberRequest extends Model
{
    /**
     * @example 66c0c9fffeb86b450c199fcd
     *
     * @var string
     */
    public $organizationId;

    /**
     * @example 1332695887xxxxxx
     *
     * @var string
     */
    public $subjectId;

    /**
     * @example User
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DeleteAppMemberRequest
     */
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
