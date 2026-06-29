<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenITag\V20220616\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenITag\V20220616\Models\SubtaskItemDetail\annotations;

class SubtaskItemDetail extends Model
{
    /**
     * @var annotations[]
     */
    public $annotations;

    /**
     * @var mixed[]
     */
    public $dataSource;

    /**
     * @var int
     */
    public $itemId;
    protected $_name = [
        'annotations' => 'Annotations',
        'dataSource' => 'DataSource',
        'itemId' => 'ItemId',
    ];

    public function validate()
    {
        if (\is_array($this->annotations)) {
            Model::validateArray($this->annotations);
        }
        if (\is_array($this->dataSource)) {
            Model::validateArray($this->dataSource);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotations) {
            if (\is_array($this->annotations)) {
                $res['Annotations'] = [];
                $n1 = 0;
                foreach ($this->annotations as $item1) {
                    $res['Annotations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dataSource) {
            if (\is_array($this->dataSource)) {
                $res['DataSource'] = [];
                foreach ($this->dataSource as $key1 => $value1) {
                    $res['DataSource'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
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
        if (isset($map['Annotations'])) {
            if (!empty($map['Annotations'])) {
                $model->annotations = [];
                $n1 = 0;
                foreach ($map['Annotations'] as $item1) {
                    $model->annotations[$n1] = annotations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['DataSource'])) {
            if (!empty($map['DataSource'])) {
                $model->dataSource = [];
                foreach ($map['DataSource'] as $key1 => $value1) {
                    $model->dataSource[$key1] = $value1;
                }
            }
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        return $model;
    }
}
