<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ocrapi\V20210707\Models\RecognizeAllTextResponseBody\data\subImages\tableInfo\tableDetails;

use AlibabaCloud\Tea\Model;

class header extends Model
{
    /**
     * @var int
     */
    public $blockId;

    /**
     * @var string[]
     */
    public $contents;
    protected $_name = [
        'blockId'  => 'BlockId',
        'contents' => 'Contents',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockId) {
            $res['BlockId'] = $this->blockId;
        }
        if (null !== $this->contents) {
            $res['Contents'] = $this->contents;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return header
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockId'])) {
            $model->blockId = $map['BlockId'];
        }
        if (isset($map['Contents'])) {
            if (!empty($map['Contents'])) {
                $model->contents = $map['Contents'];
            }
        }

        return $model;
    }
}
