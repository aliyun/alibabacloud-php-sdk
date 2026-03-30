<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models;

use AlibabaCloud\Dara\Model;

class CreateVocabularyRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $words;
    protected $_name = [
        'description' => 'Description',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'words' => 'Words',
    ];

    public function validate()
    {
        if (\is_array($this->words)) {
            Model::validateArray($this->words);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->words) {
            if (\is_array($this->words)) {
                $res['Words'] = [];
                foreach ($this->words as $key1 => $value1) {
                    $res['Words'][$key1] = $value1;
                }
            }
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Words'])) {
            if (!empty($map['Words'])) {
                $model->words = [];
                foreach ($map['Words'] as $key1 => $value1) {
                    $model->words[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
