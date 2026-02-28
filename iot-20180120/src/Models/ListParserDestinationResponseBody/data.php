<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDestinationResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\ListParserDestinationResponseBody\data\destinations;

class data extends Model
{
    /**
     * @var destinations[]
     */
    public $destinations;
    protected $_name = [
        'destinations' => 'destinations',
    ];

    public function validate()
    {
        if (\is_array($this->destinations)) {
            Model::validateArray($this->destinations);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->destinations) {
            if (\is_array($this->destinations)) {
                $res['destinations'] = [];
                $n1 = 0;
                foreach ($this->destinations as $item1) {
                    $res['destinations'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['destinations'])) {
            if (!empty($map['destinations'])) {
                $model->destinations = [];
                $n1 = 0;
                foreach ($map['destinations'] as $item1) {
                    $model->destinations[$n1] = destinations::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
