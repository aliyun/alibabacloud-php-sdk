<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sAppPrecheckResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sAppPrecheckResultResponseBody\data\jobResults;

class data extends Model
{
    /**
     * @var jobResults[]
     */
    public $jobResults;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'jobResults' => 'JobResults',
        'reason' => 'Reason',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->jobResults)) {
            Model::validateArray($this->jobResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->jobResults) {
            if (\is_array($this->jobResults)) {
                $res['JobResults'] = [];
                $n1 = 0;
                foreach ($this->jobResults as $item1) {
                    $res['JobResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['JobResults'])) {
            if (!empty($map['JobResults'])) {
                $model->jobResults = [];
                $n1 = 0;
                foreach ($map['JobResults'] as $item1) {
                    $model->jobResults[$n1] = jobResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
