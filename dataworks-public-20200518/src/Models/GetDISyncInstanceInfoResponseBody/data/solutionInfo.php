<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponseBody\data\solutionInfo\stepDetail;

class solutionInfo extends Model
{
    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var stepDetail[]
     */
    public $stepDetail;
    protected $_name = [
        'creatorName' => 'CreatorName',
        'id' => 'Id',
        'status' => 'Status',
        'stepDetail' => 'StepDetail',
    ];

    public function validate()
    {
        if (\is_array($this->stepDetail)) {
            Model::validateArray($this->stepDetail);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->stepDetail) {
            if (\is_array($this->stepDetail)) {
                $res['StepDetail'] = [];
                $n1 = 0;
                foreach ($this->stepDetail as $item1) {
                    $res['StepDetail'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StepDetail'])) {
            if (!empty($map['StepDetail'])) {
                $model->stepDetail = [];
                $n1 = 0;
                foreach ($map['StepDetail'] as $item1) {
                    $model->stepDetail[$n1++] = stepDetail::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
