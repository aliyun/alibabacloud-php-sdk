<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\paragraphInfo\paragraphDetails;

class paragraphInfo extends Model
{
    /**
     * @var int
     */
    public $paragraphCount;

    /**
     * @var paragraphDetails[]
     */
    public $paragraphDetails;
    protected $_name = [
        'paragraphCount' => 'ParagraphCount',
        'paragraphDetails' => 'ParagraphDetails',
    ];

    public function validate()
    {
        if (\is_array($this->paragraphDetails)) {
            Model::validateArray($this->paragraphDetails);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->paragraphCount) {
            $res['ParagraphCount'] = $this->paragraphCount;
        }

        if (null !== $this->paragraphDetails) {
            if (\is_array($this->paragraphDetails)) {
                $res['ParagraphDetails'] = [];
                $n1 = 0;
                foreach ($this->paragraphDetails as $item1) {
                    $res['ParagraphDetails'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ParagraphCount'])) {
            $model->paragraphCount = $map['ParagraphCount'];
        }

        if (isset($map['ParagraphDetails'])) {
            if (!empty($map['ParagraphDetails'])) {
                $model->paragraphDetails = [];
                $n1 = 0;
                foreach ($map['ParagraphDetails'] as $item1) {
                    $model->paragraphDetails[$n1++] = paragraphDetails::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
