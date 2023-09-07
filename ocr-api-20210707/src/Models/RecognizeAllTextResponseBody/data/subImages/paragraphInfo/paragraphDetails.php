<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\paragraphInfo;

use AlibabaCloud\Tea\Model;

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
        'blockList'        => 'BlockList',
        'paragraphContent' => 'ParagraphContent',
        'paragraphId'      => 'ParagraphId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockList) {
            $res['BlockList'] = $this->blockList;
        }
        if (null !== $this->paragraphContent) {
            $res['ParagraphContent'] = $this->paragraphContent;
        }
        if (null !== $this->paragraphId) {
            $res['ParagraphId'] = $this->paragraphId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return paragraphDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockList'])) {
            if (!empty($map['BlockList'])) {
                $model->blockList = $map['BlockList'];
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
