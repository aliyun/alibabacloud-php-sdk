<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflo\V20220530\Models;

use AlibabaCloud\Tea\Model;

class ListVpdsRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $enablePage;

    /**
     * @example er-kkopgtne
     *
     * @var string
     */
    public $filterErId;

    /**
     * @example true
     *
     * @var bool
     */
    public $forSelect;

    /**
     * @example vpd-wulan-test
     *
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example cn-wulanchabu
     *
     * @var string
     */
    public $regionId;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;

    /**
     * @example vpd-fuliephf
     *
     * @var string
     */
    public $vpdId;

    /**
     * @example false
     *
     * @var bool
     */
    public $withDependence;

    /**
     * @example true
     *
     * @var bool
     */
    public $withoutVcc;
    protected $_name = [
        'enablePage'     => 'EnablePage',
        'filterErId'     => 'FilterErId',
        'forSelect'      => 'ForSelect',
        'name'           => 'Name',
        'pageNumber'     => 'PageNumber',
        'pageSize'       => 'PageSize',
        'regionId'       => 'RegionId',
        'status'         => 'Status',
        'vpdId'          => 'VpdId',
        'withDependence' => 'WithDependence',
        'withoutVcc'     => 'WithoutVcc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enablePage) {
            $res['EnablePage'] = $this->enablePage;
        }
        if (null !== $this->filterErId) {
            $res['FilterErId'] = $this->filterErId;
        }
        if (null !== $this->forSelect) {
            $res['ForSelect'] = $this->forSelect;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }
        if (null !== $this->withDependence) {
            $res['WithDependence'] = $this->withDependence;
        }
        if (null !== $this->withoutVcc) {
            $res['WithoutVcc'] = $this->withoutVcc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListVpdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnablePage'])) {
            $model->enablePage = $map['EnablePage'];
        }
        if (isset($map['FilterErId'])) {
            $model->filterErId = $map['FilterErId'];
        }
        if (isset($map['ForSelect'])) {
            $model->forSelect = $map['ForSelect'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }
        if (isset($map['WithDependence'])) {
            $model->withDependence = $map['WithDependence'];
        }
        if (isset($map['WithoutVcc'])) {
            $model->withoutVcc = $map['WithoutVcc'];
        }

        return $model;
    }
}
