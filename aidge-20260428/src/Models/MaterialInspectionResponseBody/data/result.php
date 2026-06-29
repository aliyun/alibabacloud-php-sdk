<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MaterialInspectionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MaterialInspectionResponseBody\data\result\steps;

class result extends Model
{
    /**
     * @var string
     */
    public $evidence;

    /**
     * @var string
     */
    public $overallResult;

    /**
     * @var string
     */
    public $reqId;

    /**
     * @var steps[]
     */
    public $steps;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'evidence' => 'Evidence',
        'overallResult' => 'OverallResult',
        'reqId' => 'ReqId',
        'steps' => 'Steps',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->steps)) {
            Model::validateArray($this->steps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->evidence) {
            $res['Evidence'] = $this->evidence;
        }

        if (null !== $this->overallResult) {
            $res['OverallResult'] = $this->overallResult;
        }

        if (null !== $this->reqId) {
            $res['ReqId'] = $this->reqId;
        }

        if (null !== $this->steps) {
            if (\is_array($this->steps)) {
                $res['Steps'] = [];
                $n1 = 0;
                foreach ($this->steps as $item1) {
                    $res['Steps'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Evidence'])) {
            $model->evidence = $map['Evidence'];
        }

        if (isset($map['OverallResult'])) {
            $model->overallResult = $map['OverallResult'];
        }

        if (isset($map['ReqId'])) {
            $model->reqId = $map['ReqId'];
        }

        if (isset($map['Steps'])) {
            if (!empty($map['Steps'])) {
                $model->steps = [];
                $n1 = 0;
                foreach ($map['Steps'] as $item1) {
                    $model->steps[$n1] = steps::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
