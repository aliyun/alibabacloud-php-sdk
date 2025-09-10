<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Objectdet\V20191230\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Objectdet\V20191230\Models\DetectWorkwearAdvanceRequest\clothes;
use GuzzleHttp\Psr7\Stream;

class DetectWorkwearAdvanceRequest extends Model
{
    /**
     * @var clothes
     */
    public $clothes;

    /**
     * @var Stream
     */
    public $imageUrlObject;

    /**
     * @var string[]
     */
    public $labels;
    protected $_name = [
        'clothes' => 'Clothes',
        'imageUrlObject' => 'ImageUrl',
        'labels' => 'Labels',
    ];

    public function validate()
    {
        if (null !== $this->clothes) {
            $this->clothes->validate();
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clothes) {
            $res['Clothes'] = null !== $this->clothes ? $this->clothes->toArray($noStream) : $this->clothes;
        }

        if (null !== $this->imageUrlObject) {
            $res['ImageUrl'] = $this->imageUrlObject;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = $item1;
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
        if (isset($map['Clothes'])) {
            $model->clothes = clothes::fromMap($map['Clothes']);
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrlObject = $map['ImageUrl'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
