<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateHotwordLibraryRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var Hotword[]
     */
    public $hotwords;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $usageScenario;
    protected $_name = [
        'description' => 'Description',
        'hotwords' => 'Hotwords',
        'name' => 'Name',
        'usageScenario' => 'UsageScenario',
    ];

    public function validate()
    {
        if (\is_array($this->hotwords)) {
            Model::validateArray($this->hotwords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->hotwords) {
            if (\is_array($this->hotwords)) {
                $res['Hotwords'] = [];
                $n1 = 0;
                foreach ($this->hotwords as $item1) {
                    $res['Hotwords'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->usageScenario) {
            $res['UsageScenario'] = $this->usageScenario;
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

        if (isset($map['Hotwords'])) {
            if (!empty($map['Hotwords'])) {
                $model->hotwords = [];
                $n1 = 0;
                foreach ($map['Hotwords'] as $item1) {
                    $model->hotwords[$n1++] = Hotword::fromMap($item1);
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['UsageScenario'])) {
            $model->usageScenario = $map['UsageScenario'];
        }

        return $model;
    }
}
