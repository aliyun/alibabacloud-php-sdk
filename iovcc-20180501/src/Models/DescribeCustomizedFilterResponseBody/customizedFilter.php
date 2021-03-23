<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeCustomizedFilterResponseBody;

use AlibabaCloud\Tea\Model;

class customizedFilter extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $versionType;

    /**
     * @var int
     */
    public $versionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $value;

    /**
     * @var string
     */
    public $valueCompareType;

    /**
     * @var string
     */
    public $blackWhiteType;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModify;

    /**
     * @var string
     */
    public $valueType;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var int
     */
    public $gmtModifyTimestamp;
    protected $_name = [
        'id'                 => 'Id',
        'versionType'        => 'VersionType',
        'versionId'          => 'VersionId',
        'name'               => 'Name',
        'value'              => 'Value',
        'valueCompareType'   => 'ValueCompareType',
        'blackWhiteType'     => 'BlackWhiteType',
        'gmtCreate'          => 'GmtCreate',
        'gmtModify'          => 'GmtModify',
        'valueType'          => 'ValueType',
        'gmtCreateTimestamp' => 'GmtCreateTimestamp',
        'gmtModifyTimestamp' => 'GmtModifyTimestamp',
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
        if (null !== $this->versionType) {
            $res['VersionType'] = $this->versionType;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }
        if (null !== $this->valueCompareType) {
            $res['ValueCompareType'] = $this->valueCompareType;
        }
        if (null !== $this->blackWhiteType) {
            $res['BlackWhiteType'] = $this->blackWhiteType;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModify) {
            $res['GmtModify'] = $this->gmtModify;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModifyTimestamp) {
            $res['GmtModifyTimestamp'] = $this->gmtModifyTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customizedFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['VersionType'])) {
            $model->versionType = $map['VersionType'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }
        if (isset($map['ValueCompareType'])) {
            $model->valueCompareType = $map['ValueCompareType'];
        }
        if (isset($map['BlackWhiteType'])) {
            $model->blackWhiteType = $map['BlackWhiteType'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModify'])) {
            $model->gmtModify = $map['GmtModify'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModifyTimestamp'])) {
            $model->gmtModifyTimestamp = $map['GmtModifyTimestamp'];
        }

        return $model;
    }
}
