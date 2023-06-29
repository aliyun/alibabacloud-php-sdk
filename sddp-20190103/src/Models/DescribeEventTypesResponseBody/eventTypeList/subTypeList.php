<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesResponseBody\eventTypeList;

use AlibabaCloud\Tea\Model;

class subTypeList extends Model
{
    /**
     * @description The service to which the anomalous event detection rule applies. Valid values include **MaxCompute, OSS, ADS, OTS, and RDS**.
     *
     * @example RDS
     *
     * @var string
     */
    public $adaptedProduct;

    /**
     * @description The code of the anomalous event subtype.
     *
     * @example 020008
     *
     * @var string
     */
    public $code;

    /**
     * @description The code of the configuration.
     *
     * @example 0100**
     *
     * @var string
     */
    public $configCode;

    /**
     * @description The content format of anomalous event detection rule. Valid values:
     *
     *   **0**: numeric values such as thresholds
     *   **1**: text such as IP addresses
     *
     * @example 1
     *
     * @var int
     */
    public $configContentType;

    /**
     * @description The description of the configuration.
     *
     * @example The period of time for which the permission is not used exceeds the threshold. The specified threshold is ${value} calendar days.
     *
     * @var string
     */
    public $configDescription;

    /**
     * @description The value of the configuration.
     *
     * @example 90
     *
     * @var string
     */
    public $configValue;

    /**
     * @description The description of the anomalous event subtype.
     *
     * @example Inappropriate configuration-No protection for the MaxCompute sensitive project, \*\*\*\*
     *
     * @var string
     */
    public $description;

    /**
     * @description The number of times that the anomalous event hits the anomalous event detection rule.
     *
     * @example 2
     *
     * @var int
     */
    public $eventHitCount;

    /**
     * @description The ID of the anomalous event subtype.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The name of the anomalous event subtype.
     *
     * @example Inappropriate configuration-No protection for the MaxCompute sensitive project
     *
     * @var string
     */
    public $name;

    /**
     * @description Indicates whether detection is enabled for the anomalous event subtype. Valid values:
     *
     *   **1**: yes
     *   **0**: no
     *
     * @example 1
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'adaptedProduct'    => 'AdaptedProduct',
        'code'              => 'Code',
        'configCode'        => 'ConfigCode',
        'configContentType' => 'ConfigContentType',
        'configDescription' => 'ConfigDescription',
        'configValue'       => 'ConfigValue',
        'description'       => 'Description',
        'eventHitCount'     => 'EventHitCount',
        'id'                => 'Id',
        'name'              => 'Name',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return subTypeList
     */
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
