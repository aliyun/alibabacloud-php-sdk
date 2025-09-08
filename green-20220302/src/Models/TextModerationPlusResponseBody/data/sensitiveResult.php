<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\TextModerationPlusResponseBody\data;

use AlibabaCloud\Dara\Model;

class sensitiveResult extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $label;

    /**
     * @var string[]
     */
    public $sensitiveData;

    /**
     * @var string
     */
    public $sensitiveLevel;
    protected $_name = [
        'description' => 'Description',
        'label' => 'Label',
        'sensitiveData' => 'SensitiveData',
        'sensitiveLevel' => 'SensitiveLevel',
    ];

    public function validate()
    {
        if (\is_array($this->sensitiveData)) {
            Model::validateArray($this->sensitiveData);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->label) {
            $res['Label'] = $this->label;
        }

        if (null !== $this->sensitiveData) {
            if (\is_array($this->sensitiveData)) {
                $res['SensitiveData'] = [];
                $n1 = 0;
                foreach ($this->sensitiveData as $item1) {
                    $res['SensitiveData'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
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

        if (isset($map['Label'])) {
            $model->label = $map['Label'];
        }

        if (isset($map['SensitiveData'])) {
            if (!empty($map['SensitiveData'])) {
                $model->sensitiveData = [];
                $n1 = 0;
                foreach ($map['SensitiveData'] as $item1) {
                    $model->sensitiveData[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }

        return $model;
    }
}
