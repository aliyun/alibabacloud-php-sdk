<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody\eventTypeList;

use AlibabaCloud\Tea\Model;

class subTypeList extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $configContentType;

    /**
     * @var int
     */
    public $eventHitCount;

    /**
     * @var string
     */
    public $configValue;

    /**
     * @var string
     */
    public $configCode;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $configDescription;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $adaptedProduct;

    /**
     * @var int
     */
    public $id;
    protected $_name = [
        'status'            => 'Status',
        'description'       => 'Description',
        'configContentType' => 'ConfigContentType',
        'eventHitCount'     => 'EventHitCount',
        'configValue'       => 'ConfigValue',
        'configCode'        => 'ConfigCode',
        'code'              => 'Code',
        'configDescription' => 'ConfigDescription',
        'name'              => 'Name',
        'adaptedProduct'    => 'AdaptedProduct',
        'id'                => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->configContentType) {
            $res['ConfigContentType'] = $this->configContentType;
        }
        if (null !== $this->eventHitCount) {
            $res['EventHitCount'] = $this->eventHitCount;
        }
        if (null !== $this->configValue) {
            $res['ConfigValue'] = $this->configValue;
        }
        if (null !== $this->configCode) {
            $res['ConfigCode'] = $this->configCode;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->configDescription) {
            $res['ConfigDescription'] = $this->configDescription;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->adaptedProduct) {
            $res['AdaptedProduct'] = $this->adaptedProduct;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ConfigContentType'])) {
            $model->configContentType = $map['ConfigContentType'];
        }
        if (isset($map['EventHitCount'])) {
            $model->eventHitCount = $map['EventHitCount'];
        }
        if (isset($map['ConfigValue'])) {
            $model->configValue = $map['ConfigValue'];
        }
        if (isset($map['ConfigCode'])) {
            $model->configCode = $map['ConfigCode'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['ConfigDescription'])) {
            $model->configDescription = $map['ConfigDescription'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['AdaptedProduct'])) {
            $model->adaptedProduct = $map['AdaptedProduct'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
