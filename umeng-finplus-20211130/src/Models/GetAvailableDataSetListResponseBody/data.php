<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengfinplus\V20211130\Models\GetAvailableDataSetListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dataSetType;

    /**
     * @var int
     */
    public $datasetId;

    /**
     * @var string
     */
    public $idTypeDesc;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $statusDesc;
    protected $_name = [
        'createTime'  => 'createTime',
        'dataSetType' => 'dataSetType',
        'datasetId'   => 'datasetId',
        'idTypeDesc'  => 'idTypeDesc',
        'name'        => 'name',
        'statusDesc'  => 'statusDesc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->dataSetType) {
            $res['dataSetType'] = $this->dataSetType;
        }
        if (null !== $this->datasetId) {
            $res['datasetId'] = $this->datasetId;
        }
        if (null !== $this->idTypeDesc) {
            $res['idTypeDesc'] = $this->idTypeDesc;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->statusDesc) {
            $res['statusDesc'] = $this->statusDesc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['dataSetType'])) {
            $model->dataSetType = $map['dataSetType'];
        }
        if (isset($map['datasetId'])) {
            $model->datasetId = $map['datasetId'];
        }
        if (isset($map['idTypeDesc'])) {
            $model->idTypeDesc = $map['idTypeDesc'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['statusDesc'])) {
            $model->statusDesc = $map['statusDesc'];
        }

        return $model;
    }
}
