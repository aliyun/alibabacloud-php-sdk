<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody\eventTypeList;

use AlibabaCloud\Dara\Model;

class subTypeList extends Model
{
    /**
     * @var string
     */
    public $adaptedProduct;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $configCode;

    /**
     * @var int
     */
    public $configContentType;

    /**
     * @var string
     */
    public $configDescription;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $eventHitCount;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'adaptedProduct' => 'AdaptedProduct',
        'code' => 'Code',
        'configCode' => 'ConfigCode',
        'configContentType' => 'ConfigContentType',
        'configDescription' => 'ConfigDescription',
        'configValue' => 'ConfigValue',
        'description' => 'Description',
        'eventHitCount' => 'EventHitCount',
        'id' => 'Id',
        'name' => 'Name',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adaptedProduct) {
            $res['AdaptedProduct'] = $this->adaptedProduct;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->configCode) {
            $res['ConfigCode'] = $this->configCode;
        }

        if (null !== $this->configContentType) {
            $res['ConfigContentType'] = $this->configContentType;
        }

        if (null !== $this->configDescription) {
            $res['ConfigDescription'] = $this->configDescription;
        }

        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->eventHitCount) {
            $res['EventHitCount'] = $this->eventHitCount;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['AdaptedProduct'])) {
            $model->adaptedProduct = $map['AdaptedProduct'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['ConfigCode'])) {
            $model->configCode = $map['ConfigCode'];
        }

        if (isset($map['ConfigContentType'])) {
            $model->configContentType = $map['ConfigContentType'];
        }

        if (isset($map['ConfigDescription'])) {
            $model->configDescription = $map['ConfigDescription'];
        }

        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EventHitCount'])) {
            $model->eventHitCount = $map['EventHitCount'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
