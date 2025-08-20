<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageseg\V20191230\Models\ParseFaceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Imageseg\V20191230\Models\ParseFaceResponseBody\data\elements;

class data extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var string
     */
    public $originImageURL;
    protected $_name = [
        'elements' => 'Elements',
        'originImageURL' => 'OriginImageURL',
    ];

    public function validate()
    {
        if (\is_array($this->elements)) {
            Model::validateArray($this->elements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->elements) {
            if (\is_array($this->elements)) {
                $res['Elements'] = [];
                $n1 = 0;
                foreach ($this->elements as $item1) {
                    $res['Elements'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->originImageURL) {
            $res['OriginImageURL'] = $this->originImageURL;
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
        if (isset($map['Elements'])) {
            if (!empty($map['Elements'])) {
                $model->elements = [];
                $n1 = 0;
                foreach ($map['Elements'] as $item1) {
                    $model->elements[$n1] = elements::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['OriginImageURL'])) {
            $model->originImageURL = $map['OriginImageURL'];
        }

        return $model;
    }
}
