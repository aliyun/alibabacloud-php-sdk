<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class GetPlayConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $configType;

    /**
     * @var string[]
     */
    public $playDeviceAbilityList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'configType' => 'ConfigType',
        'playDeviceAbilityList' => 'PlayDeviceAbilityList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->playDeviceAbilityList)) {
            Model::validateArray($this->playDeviceAbilityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configType) {
            $res['ConfigType'] = $this->configType;
        }

        if (null !== $this->playDeviceAbilityList) {
            if (\is_array($this->playDeviceAbilityList)) {
                $res['PlayDeviceAbilityList'] = [];
                $n1 = 0;
                foreach ($this->playDeviceAbilityList as $item1) {
                    $res['PlayDeviceAbilityList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ConfigType'])) {
            $model->configType = $map['ConfigType'];
        }

        if (isset($map['PlayDeviceAbilityList'])) {
            if (!empty($map['PlayDeviceAbilityList'])) {
                $model->playDeviceAbilityList = [];
                $n1 = 0;
                foreach ($map['PlayDeviceAbilityList'] as $item1) {
                    $model->playDeviceAbilityList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
