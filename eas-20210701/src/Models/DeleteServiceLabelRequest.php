<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;

class DeleteServiceLabelRequest extends Model
{
    /**
     * @var string[]
     */
    public $keys;

    /**
     * @var string[]
     */
    public $labelKeys;
    protected $_name = [
        'keys' => 'Keys',
        'labelKeys' => 'LabelKeys',
    ];

    public function validate()
    {
        if (\is_array($this->keys)) {
            Model::validateArray($this->keys);
        }
        if (\is_array($this->labelKeys)) {
            Model::validateArray($this->labelKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keys) {
            if (\is_array($this->keys)) {
                $res['Keys'] = [];
                $n1 = 0;
                foreach ($this->keys as $item1) {
                    $res['Keys'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->labelKeys) {
            if (\is_array($this->labelKeys)) {
                $res['LabelKeys'] = [];
                $n1 = 0;
                foreach ($this->labelKeys as $item1) {
                    $res['LabelKeys'][$n1] = $item1;
                    ++$n1;
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
        if (isset($map['Keys'])) {
            if (!empty($map['Keys'])) {
                $model->keys = [];
                $n1 = 0;
                foreach ($map['Keys'] as $item1) {
                    $model->keys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['LabelKeys'])) {
            if (!empty($map['LabelKeys'])) {
                $model->labelKeys = [];
                $n1 = 0;
                foreach ($map['LabelKeys'] as $item1) {
                    $model->labelKeys[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
