<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BailianModelOnChip\V20240816\Models\GetPassThroughAuthInfoResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var mixed[]
     */
    public $passThroughParams;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'appId' => 'appId',
        'deviceName' => 'deviceName',
        'passThroughParams' => 'passThroughParams',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (\is_array($this->passThroughParams)) {
            Model::validateArray($this->passThroughParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['appId'] = $this->appId;
        }

        if (null !== $this->deviceName) {
            $res['deviceName'] = $this->deviceName;
        }

        if (null !== $this->passThroughParams) {
            if (\is_array($this->passThroughParams)) {
                $res['passThroughParams'] = [];
                foreach ($this->passThroughParams as $key1 => $value1) {
                    $res['passThroughParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['appId'])) {
            $model->appId = $map['appId'];
        }

        if (isset($map['deviceName'])) {
            $model->deviceName = $map['deviceName'];
        }

        if (isset($map['passThroughParams'])) {
            if (!empty($map['passThroughParams'])) {
                $model->passThroughParams = [];
                foreach ($map['passThroughParams'] as $key1 => $value1) {
                    $model->passThroughParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
