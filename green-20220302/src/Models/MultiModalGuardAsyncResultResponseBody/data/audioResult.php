<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\MultiModalGuardAsyncResultResponseBody\data\audioResult\sliceDetails;

class audioResult extends Model
{
    /**
     * @var sliceDetails[]
     */
    public $sliceDetails;

    /**
     * @var int
     */
    public $sliceNum;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'sliceDetails' => 'SliceDetails',
        'sliceNum' => 'SliceNum',
        'suggestion' => 'Suggestion',
    ];

    public function validate()
    {
        if (\is_array($this->sliceDetails)) {
            Model::validateArray($this->sliceDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sliceDetails) {
            if (\is_array($this->sliceDetails)) {
                $res['SliceDetails'] = [];
                $n1 = 0;
                foreach ($this->sliceDetails as $item1) {
                    $res['SliceDetails'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sliceNum) {
            $res['SliceNum'] = $this->sliceNum;
        }

        if (null !== $this->suggestion) {
            $res['Suggestion'] = $this->suggestion;
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
        if (isset($map['SliceDetails'])) {
            if (!empty($map['SliceDetails'])) {
                $model->sliceDetails = [];
                $n1 = 0;
                foreach ($map['SliceDetails'] as $item1) {
                    $model->sliceDetails[$n1] = sliceDetails::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SliceNum'])) {
            $model->sliceNum = $map['SliceNum'];
        }

        if (isset($map['Suggestion'])) {
            $model->suggestion = $map['Suggestion'];
        }

        return $model;
    }
}
