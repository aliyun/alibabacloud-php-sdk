<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponseBody\fields;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponseBody\fields\props\dataSource;

class props extends Model
{
    /**
     * @var dataSource[]
     */
    public $dataSource;

    /**
     * @var string[]
     */
    public $related;

    /**
     * @var string
     */
    public $selectMode;
    protected $_name = [
        'dataSource' => 'dataSource',
        'related' => 'related',
        'selectMode' => 'selectMode',
    ];

    public function validate()
    {
        if (\is_array($this->dataSource)) {
            Model::validateArray($this->dataSource);
        }
        if (\is_array($this->related)) {
            Model::validateArray($this->related);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataSource) {
            if (\is_array($this->dataSource)) {
                $res['dataSource'] = [];
                $n1 = 0;
                foreach ($this->dataSource as $item1) {
                    $res['dataSource'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->related) {
            if (\is_array($this->related)) {
                $res['related'] = [];
                $n1 = 0;
                foreach ($this->related as $item1) {
                    $res['related'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->selectMode) {
            $res['selectMode'] = $this->selectMode;
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
        if (isset($map['dataSource'])) {
            if (!empty($map['dataSource'])) {
                $model->dataSource = [];
                $n1 = 0;
                foreach ($map['dataSource'] as $item1) {
                    $model->dataSource[$n1] = dataSource::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['related'])) {
            if (!empty($map['related'])) {
                $model->related = [];
                $n1 = 0;
                foreach ($map['related'] as $item1) {
                    $model->related[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['selectMode'])) {
            $model->selectMode = $map['selectMode'];
        }

        return $model;
    }
}
