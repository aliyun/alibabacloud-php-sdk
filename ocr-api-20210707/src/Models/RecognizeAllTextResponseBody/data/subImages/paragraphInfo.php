<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\paragraphInfo\paragraphDetails;
use AlibabaCloud\Tea\Model;

class paragraphInfo extends Model
{
    /**
     * @example 11
     *
     * @var int
     */
    public $paragraphCount;

    /**
     * @var paragraphDetails[]
     */
    public $paragraphDetails;
    protected $_name = [
        'paragraphCount'   => 'ParagraphCount',
        'paragraphDetails' => 'ParagraphDetails',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paragraphCount) {
            $res['ParagraphCount'] = $this->paragraphCount;
        }
        if (null !== $this->paragraphDetails) {
            $res['ParagraphDetails'] = [];
            if (null !== $this->paragraphDetails && \is_array($this->paragraphDetails)) {
                $n = 0;
                foreach ($this->paragraphDetails as $item) {
                    $res['ParagraphDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paragraphInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParagraphCount'])) {
            $model->paragraphCount = $map['ParagraphCount'];
        }
        if (isset($map['ParagraphDetails'])) {
            if (!empty($map['ParagraphDetails'])) {
                $model->paragraphDetails = [];
                $n                       = 0;
                foreach ($map['ParagraphDetails'] as $item) {
                    $model->paragraphDetails[$n++] = null !== $item ? paragraphDetails::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
