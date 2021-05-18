<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepGroupTreeDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class groupDTOS extends Model
{
    /**
     * @description skillGroupId
     *
     * @var int
     */
    public $skillGroupId;

    /**
     * @description name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'skillGroupId' => 'SkillGroupId',
        'name'         => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupDTOS
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
