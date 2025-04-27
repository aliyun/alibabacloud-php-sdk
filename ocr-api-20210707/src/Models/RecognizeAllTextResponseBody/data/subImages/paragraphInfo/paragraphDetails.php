<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\paragraphInfo;

use AlibabaCloud\Dara\Model;

class paragraphDetails extends Model
{
    /**
     * @var int[]
     */
    public $blockList;

    /**
     * @var string
     */
    public $paragraphContent;

    /**
     * @var int
     */
    public $paragraphId;
    protected $_name = [
        'blockList' => 'BlockList',
        'paragraphContent' => 'ParagraphContent',
        'paragraphId' => 'ParagraphId',
    ];

    public function validate()
    {
        if (\is_array($this->blockList)) {
            Model::validateArray($this->blockList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockList) {
            if (\is_array($this->blockList)) {
                $res['BlockList'] = [];
                $n1 = 0;
                foreach ($this->blockList as $item1) {
                    $res['BlockList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->paragraphContent) {
            $res['ParagraphContent'] = $this->paragraphContent;
        }

        if (null !== $this->paragraphId) {
            $res['ParagraphId'] = $this->paragraphId;
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
        if (isset($map['BlockList'])) {
            if (!empty($map['BlockList'])) {
                $model->blockList = [];
                $n1 = 0;
                foreach ($map['BlockList'] as $item1) {
                    $model->blockList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ParagraphContent'])) {
            $model->paragraphContent = $map['ParagraphContent'];
        }

        if (isset($map['ParagraphId'])) {
            $model->paragraphId = $map['ParagraphId'];
        }

        return $model;
    }
}
