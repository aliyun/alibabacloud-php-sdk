<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class AlertRuleLabelFilter extends Model
{
    /**
     * @var string[]
     */
    public $labels;

    /**
     * @var string
     */
    public $opt;
    protected $_name = [
        'labels' => 'labels',
        'opt' => 'opt',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->opt) {
            $res['opt'] = $this->opt;
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
        if (isset($map['labels'])) {
            if (!empty($map['labels'])) {
                $model->labels = [];
                foreach ($map['labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
        }

        if (isset($map['opt'])) {
            $model->opt = $map['opt'];
        }

        return $model;
    }
}
