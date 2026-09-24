<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\UpdateSnapshotSettingResponseBody;

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
        'enable' => 'enable',
        'indices' => 'indices',
        'quartzRegex' => 'quartzRegex',
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
            $res['enable'] = $this->enable;
        }

        if (null !== $this->indices) {
            if (\is_array($this->indices)) {
                $res['indices'] = [];
                $n1 = 0;
                foreach ($this->indices as $item1) {
                    $res['indices'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->quartzRegex) {
            $res['quartzRegex'] = $this->quartzRegex;
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
        if (isset($map['enable'])) {
            $model->enable = $map['enable'];
        }

        if (isset($map['indices'])) {
            if (!empty($map['indices'])) {
                $model->indices = [];
                $n1 = 0;
                foreach ($map['indices'] as $item1) {
                    $model->indices[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['quartzRegex'])) {
            $model->quartzRegex = $map['quartzRegex'];
        }

        return $model;
    }
}
