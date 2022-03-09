<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Holowatcher\V20200730\Models\GetBimProjectListStatusResponseBody;

use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $modelingStatus;

    /**
     * @var string
     */
    public $phase;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $transStatus;
    protected $_name = [
        'id'             => 'Id',
        'modelingStatus' => 'ModelingStatus',
        'phase'          => 'Phase',
        'status'         => 'Status',
        'transStatus'    => 'TransStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modelingStatus) {
            $res['ModelingStatus'] = $this->modelingStatus;
        }
        if (null !== $this->phase) {
            $res['Phase'] = $this->phase;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transStatus) {
            $res['TransStatus'] = $this->transStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModelingStatus'])) {
            $model->modelingStatus = $map['ModelingStatus'];
        }
        if (isset($map['Phase'])) {
            $model->phase = $map['Phase'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransStatus'])) {
            $model->transStatus = $map['TransStatus'];
        }

        return $model;
    }
}
