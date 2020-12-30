<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snapshot\V20201118\Models\ListChangedBlocksResponseBody;

use AlibabaCloud\Tea\Model;

class changedBlocks extends Model
{
    /**
     * @description 数据块的索引值，从零开始
     *
     * @var int
     */
    public $blockIndex;

    /**
     * @description 数据块的 Token，用于后续的数据读取
     *
     * @var int[]
     */
    public $blockToken;
    protected $_name = [
        'blockIndex' => 'BlockIndex',
        'blockToken' => 'BlockToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blockIndex) {
            $res['BlockIndex'] = $this->blockIndex;
        }
        if (null !== $this->blockToken) {
            $res['BlockToken'] = $this->blockToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return changedBlocks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlockIndex'])) {
            $model->blockIndex = $map['BlockIndex'];
        }
        if (isset($map['BlockToken'])) {
            $model->blockToken = $map['BlockToken'];
        }

        return $model;
    }
}
