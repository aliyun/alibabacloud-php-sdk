<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\rowInfo;

use AlibabaCloud\Tea\Model;

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
        'blockList'  => 'BlockList',
        'rowContent' => 'RowContent',
        'rowId'      => 'RowId',
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
        if (null !== $this->rowContent) {
            $res['RowContent'] = $this->rowContent;
        }
        if (null !== $this->rowId) {
            $res['RowId'] = $this->rowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rowDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockList'])) {
            if (!empty($map['BlockList'])) {
                $model->blockList = $map['BlockList'];
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
