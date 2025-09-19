<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListInstanceRiskNumResponseBody\instanceRiskNum;

class ListInstanceRiskNumResponseBody extends Model
{
    /**
     * @var instanceRiskNum[]
     */
    public $instanceRiskNum;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceRiskNum' => 'InstanceRiskNum',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceRiskNum)) {
            Model::validateArray($this->instanceRiskNum);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceRiskNum) {
            if (\is_array($this->instanceRiskNum)) {
                $res['InstanceRiskNum'] = [];
                $n1 = 0;
                foreach ($this->instanceRiskNum as $item1) {
                    $res['InstanceRiskNum'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceRiskNum'])) {
            if (!empty($map['InstanceRiskNum'])) {
                $model->instanceRiskNum = [];
                $n1 = 0;
                foreach ($map['InstanceRiskNum'] as $item1) {
                    $model->instanceRiskNum[$n1] = instanceRiskNum::fromMap($item1);
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
