<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBizUnitInfoResponseBody\bizUnitInfo;

use AlibabaCloud\Tea\Model;

class envList extends Model
{
    /**
     * @example 测试数据板块001_开发
     *
     * @var string
     */
    public $displayName;

    /**
     * @example DEV
     *
     * @var string
     */
    public $envName;

    /**
     * @example LD_test001_dev
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'displayName' => 'DisplayName',
        'envName' => 'EnvName',
        'name' => 'Name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->displayName) {
            $res['DisplayName'] = $this->displayName;
        }
        if (null !== $this->envName) {
            $res['EnvName'] = $this->envName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return envList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisplayName'])) {
            $model->displayName = $map['DisplayName'];
        }
        if (isset($map['EnvName'])) {
            $model->envName = $map['EnvName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
