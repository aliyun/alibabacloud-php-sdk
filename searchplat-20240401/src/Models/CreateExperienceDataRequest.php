<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240401\Models;

use AlibabaCloud\Dara\Model;

class CreateExperienceDataRequest extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var int
     */
    public $dataSize;

    /**
     * @var string
     */
    public $dataType;

    /**
     * @var string
     */
    public $dataValue;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $serviceType;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'contentType' => 'contentType',
        'dataSize' => 'dataSize',
        'dataType' => 'dataType',
        'dataValue' => 'dataValue',
        'name' => 'name',
        'serviceType' => 'serviceType',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['contentType'] = $this->contentType;
        }

        if (null !== $this->dataSize) {
            $res['dataSize'] = $this->dataSize;
        }

        if (null !== $this->dataType) {
            $res['dataType'] = $this->dataType;
        }

        if (null !== $this->dataValue) {
            $res['dataValue'] = $this->dataValue;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->serviceType) {
            $res['serviceType'] = $this->serviceType;
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['contentType'])) {
            $model->contentType = $map['contentType'];
        }

        if (isset($map['dataSize'])) {
            $model->dataSize = $map['dataSize'];
        }

        if (isset($map['dataType'])) {
            $model->dataType = $map['dataType'];
        }

        if (isset($map['dataValue'])) {
            $model->dataValue = $map['dataValue'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['serviceType'])) {
            $model->serviceType = $map['serviceType'];
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
