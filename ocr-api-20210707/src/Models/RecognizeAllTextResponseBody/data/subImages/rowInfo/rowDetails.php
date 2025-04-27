<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\rowInfo;

use AlibabaCloud\Dara\Model;

class rowDetails extends Model
{
    /**
     * @var int[]
     */
    public $blockList;

    /**
     * @var string
     */
    public $rowContent;

    /**
     * @var int
     */
    public $rowId;
    protected $_name = [
        'blockList' => 'BlockList',
        'rowContent' => 'RowContent',
        'rowId' => 'RowId',
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

        if (null !== $this->rowContent) {
            $res['RowContent'] = $this->rowContent;
        }

        if (null !== $this->rowId) {
            $res['RowId'] = $this->rowId;
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

        if (isset($map['RowContent'])) {
            $model->rowContent = $map['RowContent'];
        }

        if (isset($map['RowId'])) {
            $model->rowId = $map['RowId'];
        }

        return $model;
    }
}
