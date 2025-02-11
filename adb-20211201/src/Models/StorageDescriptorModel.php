<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (null !== $this->serDeInfo) {
            $this->serDeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->sdId) {
            $res['SdId'] = $this->sdId;
        }

        if (null !== $this->serDeInfo) {
            $res['SerDeInfo'] = null !== $this->serDeInfo ? $this->serDeInfo->toArray($noStream) : $this->serDeInfo;
        }

        if (null !== $this->storedAsSubDirectories) {
            $res['StoredAsSubDirectories'] = $this->storedAsSubDirectories;
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
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
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
