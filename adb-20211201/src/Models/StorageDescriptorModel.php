<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class StorageDescriptorModel extends Model
{
    /**
     * @var bool
     */
    public $compressed;

    /**
     * @var string
     */
    public $inputFormat;

    /**
     * @var string
     */
    public $location;

    /**
     * @var int
     */
    public $numBuckets;

    /**
     * @var string
     */
    public $outputFormat;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var int
     */
    public $sdId;

    /**
     * @var SerDeInfoModel
     */
    public $serDeInfo;

    /**
     * @var bool
     */
    public $storedAsSubDirectories;
    protected $_name = [
        'compressed'             => 'Compressed',
        'inputFormat'            => 'InputFormat',
        'location'               => 'Location',
        'numBuckets'             => 'NumBuckets',
        'outputFormat'           => 'OutputFormat',
        'parameters'             => 'Parameters',
        'sdId'                   => 'SdId',
        'serDeInfo'              => 'SerDeInfo',
        'storedAsSubDirectories' => 'StoredAsSubDirectories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compressed) {
            $res['Compressed'] = $this->compressed;
        }
        if (null !== $this->inputFormat) {
            $res['InputFormat'] = $this->inputFormat;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->numBuckets) {
            $res['NumBuckets'] = $this->numBuckets;
        }
        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = $this->parameters;
        }
        if (null !== $this->sdId) {
            $res['SdId'] = $this->sdId;
        }
        if (null !== $this->serDeInfo) {
            $res['SerDeInfo'] = null !== $this->serDeInfo ? $this->serDeInfo->toMap() : null;
        }
        if (null !== $this->storedAsSubDirectories) {
            $res['StoredAsSubDirectories'] = $this->storedAsSubDirectories;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StorageDescriptorModel
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Compressed'])) {
            $model->compressed = $map['Compressed'];
        }
        if (isset($map['InputFormat'])) {
            $model->inputFormat = $map['InputFormat'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['NumBuckets'])) {
            $model->numBuckets = $map['NumBuckets'];
        }
        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }
        if (isset($map['Parameters'])) {
            $model->parameters = $map['Parameters'];
        }
        if (isset($map['SdId'])) {
            $model->sdId = $map['SdId'];
        }
        if (isset($map['SerDeInfo'])) {
            $model->serDeInfo = SerDeInfoModel::fromMap($map['SerDeInfo']);
        }
        if (isset($map['StoredAsSubDirectories'])) {
            $model->storedAsSubDirectories = $map['StoredAsSubDirectories'];
        }

        return $model;
    }
}
