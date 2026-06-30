<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribePolarClawAgentToolsResponseBody\groups;

use AlibabaCloud\Dara\Model;

class tools extends Model
{
    /**
     * @var string[]
     */
    public $defaultProfiles;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'defaultProfiles' => 'DefaultProfiles',
        'description' => 'Description',
        'id' => 'Id',
        'label' => 'Label',
        'source' => 'Source',
    ];

    public function validate()
    {
        if (\is_array($this->defaultProfiles)) {
            Model::validateArray($this->defaultProfiles);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultProfiles) {
            if (\is_array($this->defaultProfiles)) {
                $res['DefaultProfiles'] = [];
                $n1 = 0;
                foreach ($this->defaultProfiles as $item1) {
                    $res['DefaultProfiles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['DefaultProfiles'])) {
            if (!empty($map['DefaultProfiles'])) {
                $model->defaultProfiles = [];
                $n1 = 0;
                foreach ($map['DefaultProfiles'] as $item1) {
                    $model->defaultProfiles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
