<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteRegisterLineageRequest\deleteRegisterLineageCommand;

use AlibabaCloud\Dara\Model;

class source extends Model
{
    /**
     * @var string
     */
    public $catalog;

    /**
     * @var string
     */
    public $env;

    /**
     * @var mixed[]
     */
    public $extProperties;

    /**
     * @var string
     */
    public $guid;

    /**
     * @var string
     */
    public $metadataSubType;

    /**
     * @var string
     */
    public $metadataType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $referenceType;

    /**
     * @var string
     */
    public $schema;
    protected $_name = [
        'catalog' => 'Catalog',
        'env' => 'Env',
        'extProperties' => 'ExtProperties',
        'guid' => 'Guid',
        'metadataSubType' => 'MetadataSubType',
        'metadataType' => 'MetadataType',
        'name' => 'Name',
        'referenceType' => 'ReferenceType',
        'schema' => 'Schema',
    ];

    public function validate()
    {
        if (\is_array($this->extProperties)) {
            Model::validateArray($this->extProperties);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->catalog) {
            $res['Catalog'] = $this->catalog;
        }

        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }

        if (null !== $this->extProperties) {
            if (\is_array($this->extProperties)) {
                $res['ExtProperties'] = [];
                foreach ($this->extProperties as $key1 => $value1) {
                    $res['ExtProperties'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->guid) {
            $res['Guid'] = $this->guid;
        }

        if (null !== $this->metadataSubType) {
            $res['MetadataSubType'] = $this->metadataSubType;
        }

        if (null !== $this->metadataType) {
            $res['MetadataType'] = $this->metadataType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->referenceType) {
            $res['ReferenceType'] = $this->referenceType;
        }

        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
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
        if (isset($map['Catalog'])) {
            $model->catalog = $map['Catalog'];
        }

        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }

        if (isset($map['ExtProperties'])) {
            if (!empty($map['ExtProperties'])) {
                $model->extProperties = [];
                foreach ($map['ExtProperties'] as $key1 => $value1) {
                    $model->extProperties[$key1] = $value1;
                }
            }
        }

        if (isset($map['Guid'])) {
            $model->guid = $map['Guid'];
        }

        if (isset($map['MetadataSubType'])) {
            $model->metadataSubType = $map['MetadataSubType'];
        }

        if (isset($map['MetadataType'])) {
            $model->metadataType = $map['MetadataType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['ReferenceType'])) {
            $model->referenceType = $map['ReferenceType'];
        }

        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}
