<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class QueryMaterialListRequest extends Model
{
    /**
     * @example 1234
     *
     * @var string
     */
    public $cardNumber;

    /**
     * @var int
     */
    public $materialId;

    /**
     * @var string
     */
    public $materialVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @example 15
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $principalName;

    /**
     * @example 1
     *
     * @var int
     */
    public $region;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @example V1
     *
     * @var string
     */
    public $systemVersion;

    /**
     * @example 1
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'cardNumber'      => 'CardNumber',
        'materialId'      => 'MaterialId',
        'materialVersion' => 'MaterialVersion',
        'name'            => 'Name',
        'pageNum'         => 'PageNum',
        'pageSize'        => 'PageSize',
        'principalName'   => 'PrincipalName',
        'region'          => 'Region',
        'status'          => 'Status',
        'systemVersion'   => 'SystemVersion',
        'type'            => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cardNumber) {
            $res['CardNumber'] = $this->cardNumber;
        }
        if (null !== $this->materialId) {
            $res['MaterialId'] = $this->materialId;
        }
        if (null !== $this->materialVersion) {
            $res['MaterialVersion'] = $this->materialVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->principalName) {
            $res['PrincipalName'] = $this->principalName;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->systemVersion) {
            $res['SystemVersion'] = $this->systemVersion;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMaterialListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CardNumber'])) {
            $model->cardNumber = $map['CardNumber'];
        }
        if (isset($map['MaterialId'])) {
            $model->materialId = $map['MaterialId'];
        }
        if (isset($map['MaterialVersion'])) {
            $model->materialVersion = $map['MaterialVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrincipalName'])) {
            $model->principalName = $map['PrincipalName'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SystemVersion'])) {
            $model->systemVersion = $map['SystemVersion'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
