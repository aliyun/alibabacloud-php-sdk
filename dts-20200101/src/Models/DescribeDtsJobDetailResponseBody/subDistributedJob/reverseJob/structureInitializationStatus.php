<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody\subDistributedJob\reverseJob;

use AlibabaCloud\Tea\Model;

class structureInitializationStatus extends Model
{
    /**
     * @var string
     */
    public $errorMessage;

    /**
     * @var bool
     */
    public $needUpgrade;

    /**
     * @var string
     */
    public $percent;

    /**
     * @var string
     */
    public $progress;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'errorMessage' => 'ErrorMessage',
        'needUpgrade'  => 'NeedUpgrade',
        'percent'      => 'Percent',
        'progress'     => 'Progress',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->needUpgrade) {
            $res['NeedUpgrade'] = $this->needUpgrade;
        }
        if (null !== $this->percent) {
            $res['Percent'] = $this->percent;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return structureInitializationStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['NeedUpgrade'])) {
            $model->needUpgrade = $map['NeedUpgrade'];
        }
        if (isset($map['Percent'])) {
            $model->percent = $map['Percent'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
