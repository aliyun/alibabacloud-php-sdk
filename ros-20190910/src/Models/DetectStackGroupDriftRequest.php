<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;

class DetectStackGroupDriftRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var mixed[]
     */
    public $operationPreferences;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $stackGroupName;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'operationPreferences' => 'OperationPreferences',
        'regionId'             => 'RegionId',
        'stackGroupName'       => 'StackGroupName',
    ];

    public function validate()
    {
        if (\is_array($this->operationPreferences)) {
            Model::validateArray($this->operationPreferences);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->operationPreferences) {
            if (\is_array($this->operationPreferences)) {
                $res['OperationPreferences'] = [];
                foreach ($this->operationPreferences as $key1 => $value1) {
                    $res['OperationPreferences'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['OperationPreferences'])) {
            if (!empty($map['OperationPreferences'])) {
                $model->operationPreferences = [];
                foreach ($map['OperationPreferences'] as $key1 => $value1) {
                    $model->operationPreferences[$key1] = $value1;
                }
            }
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        return $model;
    }
}
