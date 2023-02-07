<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\GetDepGroupTreeDataResponseBody\data;

use AlibabaCloud\Tea\Model;

class groupDTOS extends Model
{
    /**
     * @var string
     */
    public $name;

    /**
     * @example 555555
     *
     * @var int
     */
    public $skillGroupId;
    protected $_name = [
        'name'         => 'Name',
        'skillGroupId' => 'SkillGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->skillGroupId) {
            $res['SkillGroupId'] = $this->skillGroupId;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SkillGroupId'])) {
            $model->skillGroupId = $map['SkillGroupId'];
        }

        return $model;
    }
}
