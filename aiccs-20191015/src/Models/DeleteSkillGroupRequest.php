<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class DeleteSkillGroupRequest extends Model
{
    /**
     * @example 123456
     *
     * @var string
     */
    public $outerGroupId;

    /**
     * @example 2
     *
     * @var string
     */
    public $outerGroupType;
    protected $_name = [
        'outerGroupId'   => 'OuterGroupId',
        'outerGroupType' => 'OuterGroupType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outerGroupId) {
            $res['OuterGroupId'] = $this->outerGroupId;
        }
        if (null !== $this->outerGroupType) {
            $res['OuterGroupType'] = $this->outerGroupType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteSkillGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OuterGroupId'])) {
            $model->outerGroupId = $map['OuterGroupId'];
        }
        if (isset($map['OuterGroupType'])) {
            $model->outerGroupType = $map['OuterGroupType'];
        }

        return $model;
    }
}
