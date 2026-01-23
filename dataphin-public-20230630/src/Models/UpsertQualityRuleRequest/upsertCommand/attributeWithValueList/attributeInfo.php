<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityRuleRequest\upsertCommand\attributeWithValueList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UpsertQualityRuleRequest\upsertCommand\attributeWithValueList\attributeInfo\valueConfig;

class attributeInfo extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $required;

    /**
     * @var bool
     */
    public $searchable;

    /**
     * @var valueConfig
     */
    public $valueConfig;
    protected $_name = [
        'description' => 'Description',
        'enabled' => 'Enabled',
        'id' => 'Id',
        'name' => 'Name',
        'required' => 'Required',
        'searchable' => 'Searchable',
        'valueConfig' => 'ValueConfig',
    ];

    public function validate()
    {
        if (null !== $this->valueConfig) {
            $this->valueConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->required) {
            $res['Required'] = $this->required;
        }

        if (null !== $this->searchable) {
            $res['Searchable'] = $this->searchable;
        }

        if (null !== $this->valueConfig) {
            $res['ValueConfig'] = null !== $this->valueConfig ? $this->valueConfig->toArray($noStream) : $this->valueConfig;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Required'])) {
            $model->required = $map['Required'];
        }

        if (isset($map['Searchable'])) {
            $model->searchable = $map['Searchable'];
        }

        if (isset($map['ValueConfig'])) {
            $model->valueConfig = valueConfig::fromMap($map['ValueConfig']);
        }

        return $model;
    }
}
