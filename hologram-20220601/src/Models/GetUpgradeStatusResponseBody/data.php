<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hologram\V20220601\Models\GetUpgradeStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $details;

    /**
     * @var string
     */
    public $fromVersion;

    /**
     * @var string
     */
    public $prepareFinishTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $toVersion;
    protected $_name = [
        'details' => 'Details',
        'fromVersion' => 'FromVersion',
        'prepareFinishTime' => 'PrepareFinishTime',
        'status' => 'Status',
        'toVersion' => 'ToVersion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->details) {
            $res['Details'] = $this->details;
        }

        if (null !== $this->fromVersion) {
            $res['FromVersion'] = $this->fromVersion;
        }

        if (null !== $this->prepareFinishTime) {
            $res['PrepareFinishTime'] = $this->prepareFinishTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->toVersion) {
            $res['ToVersion'] = $this->toVersion;
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
        if (isset($map['Details'])) {
            $model->details = $map['Details'];
        }

        if (isset($map['FromVersion'])) {
            $model->fromVersion = $map['FromVersion'];
        }

        if (isset($map['PrepareFinishTime'])) {
            $model->prepareFinishTime = $map['PrepareFinishTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['ToVersion'])) {
            $model->toVersion = $map['ToVersion'];
        }

        return $model;
    }
}
