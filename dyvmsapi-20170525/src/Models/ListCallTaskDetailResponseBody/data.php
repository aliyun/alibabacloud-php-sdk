<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\ListCallTaskDetailResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The called number.
     *
     * @example 1300000****
     *
     * @var string
     */
    public $calledNum;

    /**
     * @description The calling number.
     *
     * @example 0571000****
     *
     * @var string
     */
    public $caller;

    /**
     * @description The call duration. Unit: seconds.
     *
     * @example 200
     *
     * @var int
     */
    public $duration;

    /**
     * @description This parameter is unavailable.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The task state. Valid values:
     *
     *   **SUCCESS**: The task was successful.
     *   **FAIL**: The task failed.
     *   **INIT**: The task was not started.
     *
     * @example FAIL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'calledNum' => 'CalledNum',
        'caller'    => 'Caller',
        'duration'  => 'Duration',
        'id'        => 'Id',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->calledNum) {
            $res['CalledNum'] = $this->calledNum;
        }
        if (null !== $this->caller) {
            $res['Caller'] = $this->caller;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CalledNum'])) {
            $model->calledNum = $map['CalledNum'];
        }
        if (isset($map['Caller'])) {
            $model->caller = $map['Caller'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
