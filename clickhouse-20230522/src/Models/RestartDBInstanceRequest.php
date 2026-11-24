<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20230522\Models;

use AlibabaCloud\Dara\Model;

class RestartDBInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $computingGroupId;

    /**
     * @var string
     */
    public $DBInstanceId;

    /**
     * @var string[]
     */
    public $nodeList;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'computingGroupId' => 'ComputingGroupId',
        'DBInstanceId' => 'DBInstanceId',
        'nodeList' => 'NodeList',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->nodeList)) {
            Model::validateArray($this->nodeList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->computingGroupId) {
            $res['ComputingGroupId'] = $this->computingGroupId;
        }

        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }

        if (null !== $this->nodeList) {
            if (\is_array($this->nodeList)) {
                $res['NodeList'] = [];
                $n1 = 0;
                foreach ($this->nodeList as $item1) {
                    $res['NodeList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ComputingGroupId'])) {
            $model->computingGroupId = $map['ComputingGroupId'];
        }

        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }

        if (isset($map['NodeList'])) {
            if (!empty($map['NodeList'])) {
                $model->nodeList = [];
                $n1 = 0;
                foreach ($map['NodeList'] as $item1) {
                    $model->nodeList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
