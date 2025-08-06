<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ModifyAndroidInstanceRequest extends Model
{
    /**
     * @var string
     */
    public $androidInstanceId;

    /**
     * @var int
     */
    public $downBandwidthLimit;

    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $newAndroidInstanceName;

    /**
     * @var int
     */
    public $upBandwidthLimit;
    protected $_name = [
        'androidInstanceId' => 'AndroidInstanceId',
        'downBandwidthLimit' => 'DownBandwidthLimit',
        'instanceIds' => 'InstanceIds',
        'newAndroidInstanceName' => 'NewAndroidInstanceName',
        'upBandwidthLimit' => 'UpBandwidthLimit',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->androidInstanceId) {
            $res['AndroidInstanceId'] = $this->androidInstanceId;
        }

        if (null !== $this->downBandwidthLimit) {
            $res['DownBandwidthLimit'] = $this->downBandwidthLimit;
        }

        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->newAndroidInstanceName) {
            $res['NewAndroidInstanceName'] = $this->newAndroidInstanceName;
        }

        if (null !== $this->upBandwidthLimit) {
            $res['UpBandwidthLimit'] = $this->upBandwidthLimit;
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
        if (isset($map['AndroidInstanceId'])) {
            $model->androidInstanceId = $map['AndroidInstanceId'];
        }

        if (isset($map['DownBandwidthLimit'])) {
            $model->downBandwidthLimit = $map['DownBandwidthLimit'];
        }

        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NewAndroidInstanceName'])) {
            $model->newAndroidInstanceName = $map['NewAndroidInstanceName'];
        }

        if (isset($map['UpBandwidthLimit'])) {
            $model->upBandwidthLimit = $map['UpBandwidthLimit'];
        }

        return $model;
    }
}
