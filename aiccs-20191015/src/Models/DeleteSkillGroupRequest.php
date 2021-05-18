<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Tea\Model;

class DeleteSkillGroupRequest extends Model
{
    /**
     * @var string
     */
    public $outerGroupType;

    /**
     * @var string
     */
    public $outerGroupId;
    protected $_name = [
        'outerGroupType' => 'OuterGroupType',
        'outerGroupId'   => 'OuterGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outerGroupType) {
            $res['OuterGroupType'] = $this->outerGroupType;
        }
        if (null !== $this->outerGroupId) {
            $res['OuterGroupId'] = $this->outerGroupId;
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
        if (isset($map['OuterGroupType'])) {
            $model->outerGroupType = $map['OuterGroupType'];
        }
        if (isset($map['OuterGroupId'])) {
            $model->outerGroupId = $map['OuterGroupId'];
        }

        return $model;
    }
}
