<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDatasetRequest\updateCommand\versionConfig\metadataStorageConfig\tableSchema;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpdateDatasetRequest\updateCommand\versionConfig\metadataStorageConfig\tableSchema\columns\vectorIndexConfig;

class columns extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $elementType;

    /**
     * @var int
     */
    public $maxCapacity;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $pk;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $url;

    /**
     * @var vectorIndexConfig
     */
    public $vectorIndexConfig;
    protected $_name = [
        'comment' => 'Comment',
        'elementType' => 'ElementType',
        'maxCapacity' => 'MaxCapacity',
        'name' => 'Name',
        'pk' => 'Pk',
        'type' => 'Type',
        'url' => 'Url',
        'vectorIndexConfig' => 'VectorIndexConfig',
    ];

    public function validate()
    {
        if (null !== $this->vectorIndexConfig) {
            $this->vectorIndexConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }

        if (null !== $this->elementType) {
            $res['ElementType'] = $this->elementType;
        }

        if (null !== $this->maxCapacity) {
            $res['MaxCapacity'] = $this->maxCapacity;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->pk) {
            $res['Pk'] = $this->pk;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
        }

        if (null !== $this->vectorIndexConfig) {
            $res['VectorIndexConfig'] = null !== $this->vectorIndexConfig ? $this->vectorIndexConfig->toArray($noStream) : $this->vectorIndexConfig;
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
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }

        if (isset($map['ElementType'])) {
            $model->elementType = $map['ElementType'];
        }

        if (isset($map['MaxCapacity'])) {
            $model->maxCapacity = $map['MaxCapacity'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Pk'])) {
            $model->pk = $map['Pk'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        if (isset($map['VectorIndexConfig'])) {
            $model->vectorIndexConfig = vectorIndexConfig::fromMap($map['VectorIndexConfig']);
        }

        return $model;
    }
}
