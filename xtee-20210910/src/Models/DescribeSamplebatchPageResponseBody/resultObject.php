<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models\DescribeSamplebatchPageResponseBody;

use AlibabaCloud\Dara\Model;

class resultObject extends Model
{
    /**
     * @var string
     */
    public $batchName;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $initValidFileRow;

    /**
     * @var string
     */
    public $sampleBatchType;

    /**
     * @var string
     */
    public $services;

    /**
     * @var string
     */
    public $updator;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'batchName' => 'batchName',
        'creator' => 'creator',
        'dataType' => 'dataType',
        'description' => 'description',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'initValidFileRow' => 'initValidFileRow',
        'sampleBatchType' => 'sampleBatchType',
        'services' => 'services',
        'updator' => 'updator',
        'uuid' => 'uuid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchName) {
            $res['batchName'] = $this->batchName;
        }

        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->initValidFileRow) {
            $res['initValidFileRow'] = $this->initValidFileRow;
        }

        if (null !== $this->sampleBatchType) {
            $res['sampleBatchType'] = $this->sampleBatchType;
        }

        if (null !== $this->services) {
            $res['services'] = $this->services;
        }

        if (null !== $this->updator) {
            $res['updator'] = $this->updator;
        }

        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
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
        if (isset($map['batchName'])) {
            $model->batchName = $map['batchName'];
        }

        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['initValidFileRow'])) {
            $model->initValidFileRow = $map['initValidFileRow'];
        }

        if (isset($map['sampleBatchType'])) {
            $model->sampleBatchType = $map['sampleBatchType'];
        }

        if (isset($map['services'])) {
            $model->services = $map['services'];
        }

        if (isset($map['updator'])) {
            $model->updator = $map['updator'];
        }

        if (isset($map['uuid'])) {
            $model->uuid = $map['uuid'];
        }

        return $model;
    }
}
