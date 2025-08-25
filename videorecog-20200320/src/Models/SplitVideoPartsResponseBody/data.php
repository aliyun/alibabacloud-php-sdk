<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponseBody\data\elements;
use AlibabaCloud\SDK\Videorecog\V20200320\Models\SplitVideoPartsResponseBody\data\splitVideoPartResults;

class data extends Model
{
    /**
     * @var elements[]
     */
    public $elements;

    /**
     * @var splitVideoPartResults[]
     */
    public $splitVideoPartResults;
    protected $_name = [
        'elements' => 'Elements',
        'splitVideoPartResults' => 'SplitVideoPartResults',
    ];

    public function validate()
    {
        if (\is_array($this->elements)) {
            Model::validateArray($this->elements);
        }
        if (\is_array($this->splitVideoPartResults)) {
            Model::validateArray($this->splitVideoPartResults);
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

        if (null !== $this->splitVideoPartResults) {
            if (\is_array($this->splitVideoPartResults)) {
                $res['SplitVideoPartResults'] = [];
                $n1 = 0;
                foreach ($this->splitVideoPartResults as $item1) {
                    $res['SplitVideoPartResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['SplitVideoPartResults'])) {
            if (!empty($map['SplitVideoPartResults'])) {
                $model->splitVideoPartResults = [];
                $n1 = 0;
                foreach ($map['SplitVideoPartResults'] as $item1) {
                    $model->splitVideoPartResults[$n1] = splitVideoPartResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
