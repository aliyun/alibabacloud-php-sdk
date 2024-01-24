<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models\SubmitHotExpandTaskRequest;

use AlibabaCloud\Tea\Model;

class instanceDbMapping extends Model
{
    /**
     * @description The name of the hot-spot database.
     *
     * @example hot_test_****_****
     *
     * @var string
     */
    public $dbList;

    /**
     * @description The name of the ApsaraDB RDS instance to which the hot-spot database belongs.
     *
     * @example rm-bp1t1mk5a5bdj****
     *
     * @var string
     */
    public $instanceName;
    protected $_name = [
        'dbList'       => 'DbList',
        'instanceName' => 'InstanceName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dbList) {
            $res['DbList'] = $this->dbList;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceDbMapping
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbList'])) {
            $model->dbList = $map['DbList'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        return $model;
    }
}
