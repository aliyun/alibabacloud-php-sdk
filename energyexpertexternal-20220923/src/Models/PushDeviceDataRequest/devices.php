<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushDeviceDataRequest;

use AlibabaCloud\Dara\Model;

class devices extends Model
{
    /**
     * @var mixed[]
     */
    public $data;
    /**
     * @var string
     */
    public $deviceId;
    /**
     * @var string
     */
    public $recordTime;
    protected $_name = [
        'data'       => 'data',
        'deviceId'   => 'deviceId',
        'recordTime' => 'recordTime',
    ];

    public function validate()
    {
        if (\is_array($this->data)) {
            Model::validateArray($this->data);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            if (\is_array($this->data)) {
                $res['data'] = [];
                foreach ($this->data as $key1 => $value1) {
                    $res['data'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->deviceId) {
            $res['deviceId'] = $this->deviceId;
        }

        if (null !== $this->recordTime) {
            $res['recordTime'] = $this->recordTime;
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
        if (isset($map['data'])) {
            if (!empty($map['data'])) {
                $model->data = [];
                foreach ($map['data'] as $key1 => $value1) {
                    $model->data[$key1] = $value1;
                }
            }
        }

        if (isset($map['deviceId'])) {
            $model->deviceId = $map['deviceId'];
        }

        if (isset($map['recordTime'])) {
            $model->recordTime = $map['recordTime'];
        }

        return $model;
    }
}
