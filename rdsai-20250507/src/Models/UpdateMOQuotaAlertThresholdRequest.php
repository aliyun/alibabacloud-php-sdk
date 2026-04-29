<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RdsAi\V20250507\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\RdsAi\V20250507\Models\UpdateMOQuotaAlertThresholdRequest\apikey;

class UpdateMOQuotaAlertThresholdRequest extends Model
{
    /**
     * @var apikey[]
     */
    public $apikey;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'apikey' => 'Apikey',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        if (\is_array($this->apikey)) {
            Model::validateArray($this->apikey);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apikey) {
            if (\is_array($this->apikey)) {
                $res['Apikey'] = [];
                $n1 = 0;
                foreach ($this->apikey as $item1) {
                    $res['Apikey'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['Apikey'])) {
            if (!empty($map['Apikey'])) {
                $model->apikey = [];
                $n1 = 0;
                foreach ($map['Apikey'] as $item1) {
                    $model->apikey[$n1] = apikey::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
