<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\DescribeSnapshotSettingResponseBody;

use AlibabaCloud\Dara\Model;

class result extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string[]
     */
    public $indices;

    /**
     * @var string
     */
    public $quartzRegex;
    protected $_name = [
        'enable' => 'Enable',
        'indices' => 'Indices',
        'quartzRegex' => 'QuartzRegex',
    ];

    public function validate()
    {
        if (\is_array($this->indices)) {
            Model::validateArray($this->indices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->indices) {
            if (\is_array($this->indices)) {
                $res['Indices'] = [];
                $n1 = 0;
                foreach ($this->indices as $item1) {
                    $res['Indices'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quartzRegex) {
            $res['QuartzRegex'] = $this->quartzRegex;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Indices'])) {
            if (!empty($map['Indices'])) {
                $model->indices = [];
                $n1 = 0;
                foreach ($map['Indices'] as $item1) {
                    $model->indices[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['QuartzRegex'])) {
            $model->quartzRegex = $map['QuartzRegex'];
        }

        return $model;
    }
}
