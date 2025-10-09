<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\Table;

use AlibabaCloud\Dara\Model;

class technicalMetadata extends Model
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
     * @var string
     */
    public $outputFormat;

    /**
     * @var string
     */
    public $owner;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $serializationLibrary;
    protected $_name = [
        'compressed' => 'Compressed',
        'inputFormat' => 'InputFormat',
        'location' => 'Location',
        'outputFormat' => 'OutputFormat',
        'owner' => 'Owner',
        'parameters' => 'Parameters',
        'serializationLibrary' => 'SerializationLibrary',
    ];

    public function validate()
    {
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
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

        if (null !== $this->outputFormat) {
            $res['OutputFormat'] = $this->outputFormat;
        }

        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['Parameters'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->serializationLibrary) {
            $res['SerializationLibrary'] = $this->serializationLibrary;
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

        if (isset($map['OutputFormat'])) {
            $model->outputFormat = $map['OutputFormat'];
        }

        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                foreach ($map['Parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
            }
        }

        if (isset($map['SerializationLibrary'])) {
            $model->serializationLibrary = $map['SerializationLibrary'];
        }

        return $model;
    }
}
