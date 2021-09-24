<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponse\data;

use AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetDISyncInstanceInfoResponse\data\solutionInfo\stepDetail;
use AlibabaCloud\Tea\Model;

class solutionInfo extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creatorName;

    /**
     * @var stepDetail[]
     */
    public $stepDetail;
    protected $_name = [
        'id'          => 'Id',
        'status'      => 'Status',
        'creatorName' => 'CreatorName',
        'stepDetail'  => 'StepDetail',
    ];

    public function validate()
    {
        Model::validateRequired('id', $this->id, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('creatorName', $this->creatorName, true);
        Model::validateRequired('stepDetail', $this->stepDetail, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creatorName) {
            $res['CreatorName'] = $this->creatorName;
        }
        if (null !== $this->stepDetail) {
            $res['StepDetail'] = [];
            if (null !== $this->stepDetail && \is_array($this->stepDetail)) {
                $n = 0;
                foreach ($this->stepDetail as $item) {
                    $res['StepDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return solutionInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreatorName'])) {
            $model->creatorName = $map['CreatorName'];
        }
        if (isset($map['StepDetail'])) {
            if (!empty($map['StepDetail'])) {
                $model->stepDetail = [];
                $n                 = 0;
                foreach ($map['StepDetail'] as $item) {
                    $model->stepDetail[$n++] = null !== $item ? stepDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
