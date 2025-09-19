<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetContainerDefenseRuleDetailResponseBody\data;

use AlibabaCloud\Dara\Model;

class whitelist extends Model
{
    /**
     * @var string[]
     */
    public $hash;

    /**
     * @var string[]
     */
    public $image;

    /**
     * @var string[]
     */
    public $path;
    protected $_name = [
        'hash' => 'Hash',
        'image' => 'Image',
        'path' => 'Path',
    ];

    public function validate()
    {
        if (\is_array($this->hash)) {
            Model::validateArray($this->hash);
        }
        if (\is_array($this->image)) {
            Model::validateArray($this->image);
        }
        if (\is_array($this->path)) {
            Model::validateArray($this->path);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->hash) {
            if (\is_array($this->hash)) {
                $res['Hash'] = [];
                $n1 = 0;
                foreach ($this->hash as $item1) {
                    $res['Hash'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->image) {
            if (\is_array($this->image)) {
                $res['Image'] = [];
                $n1 = 0;
                foreach ($this->image as $item1) {
                    $res['Image'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->path) {
            if (\is_array($this->path)) {
                $res['Path'] = [];
                $n1 = 0;
                foreach ($this->path as $item1) {
                    $res['Path'][$n1] = $item1;
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
        if (isset($map['Hash'])) {
            if (!empty($map['Hash'])) {
                $model->hash = [];
                $n1 = 0;
                foreach ($map['Hash'] as $item1) {
                    $model->hash[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Image'])) {
            if (!empty($map['Image'])) {
                $model->image = [];
                $n1 = 0;
                foreach ($map['Image'] as $item1) {
                    $model->image[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Path'])) {
            if (!empty($map['Path'])) {
                $model->path = [];
                $n1 = 0;
                foreach ($map['Path'] as $item1) {
                    $model->path[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
