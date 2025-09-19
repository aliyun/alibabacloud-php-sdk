<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskLevelsResponseBody\instanceRiskLevels;

class ListInstanceRiskLevelsResponseBody extends Model
{
    /**
     * @var instanceRiskLevels[]
     */
    public $instanceRiskLevels;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceRiskLevels' => 'InstanceRiskLevels',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceRiskLevels)) {
            Model::validateArray($this->instanceRiskLevels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceRiskLevels) {
            if (\is_array($this->instanceRiskLevels)) {
                $res['InstanceRiskLevels'] = [];
                $n1 = 0;
                foreach ($this->instanceRiskLevels as $item1) {
                    $res['InstanceRiskLevels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceRiskLevels'])) {
            if (!empty($map['InstanceRiskLevels'])) {
                $model->instanceRiskLevels = [];
                $n1 = 0;
                foreach ($map['InstanceRiskLevels'] as $item1) {
                    $model->instanceRiskLevels[$n1] = instanceRiskLevels::fromMap($item1);
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
