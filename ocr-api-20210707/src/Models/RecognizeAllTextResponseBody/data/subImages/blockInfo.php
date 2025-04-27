<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails;

class blockInfo extends Model
{
    /**
     * @var int
     */
    public $blockCount;

    /**
     * @var blockDetails[]
     */
    public $blockDetails;
    protected $_name = [
        'blockCount' => 'BlockCount',
        'blockDetails' => 'BlockDetails',
    ];

    public function validate()
    {
        if (\is_array($this->blockDetails)) {
            Model::validateArray($this->blockDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }

        if (null !== $this->blockDetails) {
            if (\is_array($this->blockDetails)) {
                $res['BlockDetails'] = [];
                $n1 = 0;
                foreach ($this->blockDetails as $item1) {
                    $res['BlockDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }

        if (isset($map['BlockDetails'])) {
            if (!empty($map['BlockDetails'])) {
                $model->blockDetails = [];
                $n1 = 0;
                foreach ($map['BlockDetails'] as $item1) {
                    $model->blockDetails[$n1++] = blockDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
