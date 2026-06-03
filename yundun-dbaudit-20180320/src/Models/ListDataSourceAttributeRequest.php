<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Dara\Model;

class ListDataSourceAttributeRequest extends Model
{
    /**
     * @var string[]
     */
    public $dbIds;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'dbIds' => 'DbIds',
        'instanceId' => 'InstanceId',
        'lang' => 'Lang',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        if (\is_array($this->dbIds)) {
            Model::validateArray($this->dbIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dbIds) {
            if (\is_array($this->dbIds)) {
                $res['DbIds'] = [];
                $n1 = 0;
                foreach ($this->dbIds as $item1) {
                    $res['DbIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
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
        if (isset($map['DbIds'])) {
            if (!empty($map['DbIds'])) {
                $model->dbIds = [];
                $n1 = 0;
                foreach ($map['DbIds'] as $item1) {
                    $model->dbIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
