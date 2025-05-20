<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DlfNext\V20250310\Models;

use AlibabaCloud\Dara\Model;

class AlterCatalogRequest extends Model
{
    /**
     * @var string[]
     */
    public $removals;

    /**
     * @var string[]
     */
    public $updates;
    protected $_name = [
        'removals' => 'removals',
        'updates' => 'updates',
    ];

    public function validate()
    {
        if (\is_array($this->removals)) {
            Model::validateArray($this->removals);
        }
        if (\is_array($this->updates)) {
            Model::validateArray($this->updates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->removals) {
            if (\is_array($this->removals)) {
                $res['removals'] = [];
                $n1 = 0;
                foreach ($this->removals as $item1) {
                    $res['removals'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->updates) {
            if (\is_array($this->updates)) {
                $res['updates'] = [];
                foreach ($this->updates as $key1 => $value1) {
                    $res['updates'][$key1] = $value1;
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
        if (isset($map['removals'])) {
            if (!empty($map['removals'])) {
                $model->removals = [];
                $n1 = 0;
                foreach ($map['removals'] as $item1) {
                    $model->removals[$n1++] = $item1;
                }
            }
        }

        if (isset($map['updates'])) {
            if (!empty($map['updates'])) {
                $model->updates = [];
                foreach ($map['updates'] as $key1 => $value1) {
                    $model->updates[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
