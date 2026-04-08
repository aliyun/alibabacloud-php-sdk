<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Csas\V20230120\Models\GetPADiagnosisTaskResponseBody\diagnosisTask\result\networkLinkInfo\nodes\geoData;

class nodes extends Model
{
    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $cloudNetId;

    /**
     * @var string
     */
    public $error;

    /**
     * @var geoData
     */
    public $geoData;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nameEn;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'address' => 'Address',
        'cloudNetId' => 'CloudNetId',
        'error' => 'Error',
        'geoData' => 'GeoData',
        'id' => 'Id',
        'name' => 'Name',
        'nameEn' => 'NameEn',
        'nodeType' => 'NodeType',
        'resourceId' => 'ResourceId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (null !== $this->geoData) {
            $this->geoData->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }

        if (null !== $this->cloudNetId) {
            $res['CloudNetId'] = $this->cloudNetId;
        }

        if (null !== $this->error) {
            $res['Error'] = $this->error;
        }

        if (null !== $this->geoData) {
            $res['GeoData'] = null !== $this->geoData ? $this->geoData->toArray($noStream) : $this->geoData;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->nameEn) {
            $res['NameEn'] = $this->nameEn;
        }

        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }

        if (isset($map['CloudNetId'])) {
            $model->cloudNetId = $map['CloudNetId'];
        }

        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }

        if (isset($map['GeoData'])) {
            $model->geoData = geoData::fromMap($map['GeoData']);
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['NameEn'])) {
            $model->nameEn = $map['NameEn'];
        }

        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
