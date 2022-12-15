<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models;

use AlibabaCloud\Tea\Model;

class UserQpsDetail extends Model
{
    /**
     * @var string
     */
    public $apiName;

    /**
     * @var string
     */
    public $day;

    /**
     * @var int
     */
    public $qps;

    /**
     * @var string
     */
    public $qpsRule;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'apiName' => 'ApiName',
        'day'     => 'Day',
        'qps'     => 'Qps',
        'qpsRule' => 'QpsRule',
        'status'  => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiName) {
            $res['ApiName'] = $this->apiName;
        }
        if (null !== $this->day) {
            $res['Day'] = $this->day;
        }
        if (null !== $this->qps) {
            $res['Qps'] = $this->qps;
        }
        if (null !== $this->qpsRule) {
            $res['QpsRule'] = $this->qpsRule;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UserQpsDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiName'])) {
            $model->apiName = $map['ApiName'];
        }
        if (isset($map['Day'])) {
            $model->day = $map['Day'];
        }
        if (isset($map['Qps'])) {
            $model->qps = $map['Qps'];
        }
        if (isset($map['QpsRule'])) {
            $model->qpsRule = $map['QpsRule'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
