<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IaCService\V20210806\Models\ListRelationModulesResponseBody;

use AlibabaCloud\Tea\Model;

class modules extends Model
{
    /**
     * @var string
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'latestVersion' => 'latestVersion',
        'moduleId'      => 'moduleId',
        'name'          => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->latestVersion) {
            $res['latestVersion'] = $this->latestVersion;
        }
        if (null !== $this->moduleId) {
            $res['moduleId'] = $this->moduleId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return modules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['latestVersion'])) {
            $model->latestVersion = $map['latestVersion'];
        }
        if (isset($map['moduleId'])) {
            $model->moduleId = $map['moduleId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
