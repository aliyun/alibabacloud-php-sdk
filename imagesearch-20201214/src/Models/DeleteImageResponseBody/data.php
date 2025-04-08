<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20201214\Models\DeleteImageResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $picNames;
    protected $_name = [
        'picNames' => 'PicNames',
    ];

    public function validate()
    {
        if (\is_array($this->picNames)) {
            Model::validateArray($this->picNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->picNames) {
            if (\is_array($this->picNames)) {
                $res['PicNames'] = [];
                $n1 = 0;
                foreach ($this->picNames as $item1) {
                    $res['PicNames'][$n1++] = $item1;
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
        if (isset($map['PicNames'])) {
            if (!empty($map['PicNames'])) {
                $model->picNames = [];
                $n1 = 0;
                foreach ($map['PicNames'] as $item1) {
                    $model->picNames[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
