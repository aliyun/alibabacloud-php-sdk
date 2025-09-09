<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class SearchCloudGtmAddressesRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $addressId;

    /**
     * @var string
     */
    public $availableStatus;

    /**
     * @var string
     */
    public $enableStatus;

    /**
     * @var string
     */
    public $healthStatus;

    /**
     * @var string
     */
    public $monitorTemplateName;

    /**
     * @var string
     */
    public $nameSearchCondition;

    /**
     * @var string[]
     */
    public $names;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $remarkSearchCondition;

    /**
     * @var string[]
     */
    public $remarks;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'address' => 'Address',
        'addressId' => 'AddressId',
        'availableStatus' => 'AvailableStatus',
        'enableStatus' => 'EnableStatus',
        'healthStatus' => 'HealthStatus',
        'monitorTemplateName' => 'MonitorTemplateName',
        'nameSearchCondition' => 'NameSearchCondition',
        'names' => 'Names',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'remarkSearchCondition' => 'RemarkSearchCondition',
        'remarks' => 'Remarks',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->names)) {
            Model::validateArray($this->names);
        }
        if (\is_array($this->remarks)) {
            Model::validateArray($this->remarks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->addressId) {
            $res['AddressId'] = $this->addressId;
        }

        if (null !== $this->availableStatus) {
            $res['AvailableStatus'] = $this->availableStatus;
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
        }

        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }

        if (null !== $this->monitorTemplateName) {
            $res['MonitorTemplateName'] = $this->monitorTemplateName;
        }

        if (null !== $this->nameSearchCondition) {
            $res['NameSearchCondition'] = $this->nameSearchCondition;
        }

        if (null !== $this->names) {
            if (\is_array($this->names)) {
                $res['Names'] = [];
                $n1 = 0;
                foreach ($this->names as $item1) {
                    $res['Names'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->remarkSearchCondition) {
            $res['RemarkSearchCondition'] = $this->remarkSearchCondition;
        }

        if (null !== $this->remarks) {
            if (\is_array($this->remarks)) {
                $res['Remarks'] = [];
                $n1 = 0;
                foreach ($this->remarks as $item1) {
                    $res['Remarks'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['AddressId'])) {
            $model->addressId = $map['AddressId'];
        }

        if (isset($map['AvailableStatus'])) {
            $model->availableStatus = $map['AvailableStatus'];
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }

        if (isset($map['MonitorTemplateName'])) {
            $model->monitorTemplateName = $map['MonitorTemplateName'];
        }

        if (isset($map['NameSearchCondition'])) {
            $model->nameSearchCondition = $map['NameSearchCondition'];
        }

        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = [];
                $n1 = 0;
                foreach ($map['Names'] as $item1) {
                    $model->names[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RemarkSearchCondition'])) {
            $model->remarkSearchCondition = $map['RemarkSearchCondition'];
        }

        if (isset($map['Remarks'])) {
            if (!empty($map['Remarks'])) {
                $model->remarks = [];
                $n1 = 0;
                foreach ($map['Remarks'] as $item1) {
                    $model->remarks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
