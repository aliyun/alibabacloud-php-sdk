<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody\configGroups;

use AlibabaCloud\SDK\WebPlus\V20190320\Models\DescribeConfigIndexResponseBody\configGroups\configGroup\configPaths;
use AlibabaCloud\Tea\Model;

class configGroup extends Model
{
    /**
     * @var configPaths
     */
    public $configPaths;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $groupLabel;
    protected $_name = [
        'configPaths' => 'ConfigPaths',
        'groupName'   => 'GroupName',
        'groupLabel'  => 'GroupLabel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->configPaths) {
            $res['ConfigPaths'] = null !== $this->configPaths ? $this->configPaths->toMap() : null;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupLabel) {
            $res['GroupLabel'] = $this->groupLabel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConfigPaths'])) {
            $model->configPaths = configPaths::fromMap($map['ConfigPaths']);
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupLabel'])) {
            $model->groupLabel = $map['GroupLabel'];
        }

        return $model;
    }
}
