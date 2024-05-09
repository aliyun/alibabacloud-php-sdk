<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponseBody\moduleList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ApplyListQueryResponseBody\moduleList\travelerList\carCitySet;
use AlibabaCloud\Tea\Model;

class travelerList extends Model
{
    /**
     * @var string
     */
    public $attribute;

    /**
     * @var carCitySet[]
     */
    public $carCitySet;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var string
     */
    public $departId;

    /**
     * @var string
     */
    public $invoiceName;

    /**
     * @var string
     */
    public $jobNo;

    /**
     * @var string
     */
    public $paymentDepartmentName;

    /**
     * @var string
     */
    public $projectCode;

    /**
     * @var string
     */
    public $projectTitle;

    /**
     * @var string
     */
    public $thirdpartDepartId;

    /**
     * @example user1
     *
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'attribute'             => 'attribute',
        'carCitySet'            => 'car_city_set',
        'costCenterName'        => 'cost_center_name',
        'departId'              => 'depart_id',
        'invoiceName'           => 'invoice_name',
        'jobNo'                 => 'job_no',
        'paymentDepartmentName' => 'payment_department_name',
        'projectCode'           => 'project_code',
        'projectTitle'          => 'project_title',
        'thirdpartDepartId'     => 'thirdpart_depart_id',
        'userId'                => 'user_id',
        'userName'              => 'user_name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attribute) {
            $res['attribute'] = $this->attribute;
        }
        if (null !== $this->carCitySet) {
            $res['car_city_set'] = [];
            if (null !== $this->carCitySet && \is_array($this->carCitySet)) {
                $n = 0;
                foreach ($this->carCitySet as $item) {
                    $res['car_city_set'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->costCenterName) {
            $res['cost_center_name'] = $this->costCenterName;
        }
        if (null !== $this->departId) {
            $res['depart_id'] = $this->departId;
        }
        if (null !== $this->invoiceName) {
            $res['invoice_name'] = $this->invoiceName;
        }
        if (null !== $this->jobNo) {
            $res['job_no'] = $this->jobNo;
        }
        if (null !== $this->paymentDepartmentName) {
            $res['payment_department_name'] = $this->paymentDepartmentName;
        }
        if (null !== $this->projectCode) {
            $res['project_code'] = $this->projectCode;
        }
        if (null !== $this->projectTitle) {
            $res['project_title'] = $this->projectTitle;
        }
        if (null !== $this->thirdpartDepartId) {
            $res['thirdpart_depart_id'] = $this->thirdpartDepartId;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['user_name'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return travelerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attribute'])) {
            $model->attribute = $map['attribute'];
        }
        if (isset($map['car_city_set'])) {
            if (!empty($map['car_city_set'])) {
                $model->carCitySet = [];
                $n                 = 0;
                foreach ($map['car_city_set'] as $item) {
                    $model->carCitySet[$n++] = null !== $item ? carCitySet::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cost_center_name'])) {
            $model->costCenterName = $map['cost_center_name'];
        }
        if (isset($map['depart_id'])) {
            $model->departId = $map['depart_id'];
        }
        if (isset($map['invoice_name'])) {
            $model->invoiceName = $map['invoice_name'];
        }
        if (isset($map['job_no'])) {
            $model->jobNo = $map['job_no'];
        }
        if (isset($map['payment_department_name'])) {
            $model->paymentDepartmentName = $map['payment_department_name'];
        }
        if (isset($map['project_code'])) {
            $model->projectCode = $map['project_code'];
        }
        if (isset($map['project_title'])) {
            $model->projectTitle = $map['project_title'];
        }
        if (isset($map['thirdpart_depart_id'])) {
            $model->thirdpartDepartId = $map['thirdpart_depart_id'];
        }
        if (isset($map['user_id'])) {
            $model->userId = $map['user_id'];
        }
        if (isset($map['user_name'])) {
            $model->userName = $map['user_name'];
        }

        return $model;
    }
}
