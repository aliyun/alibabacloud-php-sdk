<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\blockInfo\blockDetails;
use AlibabaCloud\Tea\Model;

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
        'blockCount'   => 'BlockCount',
        'blockDetails' => 'BlockDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockCount) {
            $res['BlockCount'] = $this->blockCount;
        }
        if (null !== $this->blockDetails) {
            $res['BlockDetails'] = [];
            if (null !== $this->blockDetails && \is_array($this->blockDetails)) {
                $n = 0;
                foreach ($this->blockDetails as $item) {
                    $res['BlockDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return blockInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockCount'])) {
            $model->blockCount = $map['BlockCount'];
        }
        if (isset($map['BlockDetails'])) {
            if (!empty($map['BlockDetails'])) {
                $model->blockDetails = [];
                $n                   = 0;
                foreach ($map['BlockDetails'] as $item) {
                    $model->blockDetails[$n++] = null !== $item ? blockDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
