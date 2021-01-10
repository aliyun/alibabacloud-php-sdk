<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\GetAIJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class actionJobDTO extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $actionId;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $iotId;
    protected $_name = [
        'jobId'    => 'JobId',
        'actionId' => 'ActionId',
        'status'   => 'Status',
        'iotId'    => 'IotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->actionId) {
            $res['ActionId'] = $this->actionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actionJobDTO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['ActionId'])) {
            $model->actionId = $map['ActionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
