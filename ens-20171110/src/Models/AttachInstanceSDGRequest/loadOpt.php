<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\AttachInstanceSDGRequest;

use AlibabaCloud\Dara\Model;

class loadOpt extends Model
{
    /**
     * @var bool
     */
    public $blockRwSplit;

    /**
     * @var int
     */
    public $blockRwSplitSize;

    /**
     * @var bool
     */
    public $cache;

    /**
     * @var int
     */
    public $cacheSize;
    protected $_name = [
        'blockRwSplit' => 'BlockRwSplit',
        'blockRwSplitSize' => 'BlockRwSplitSize',
        'cache' => 'Cache',
        'cacheSize' => 'CacheSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blockRwSplit) {
            $res['BlockRwSplit'] = $this->blockRwSplit;
        }

        if (null !== $this->blockRwSplitSize) {
            $res['BlockRwSplitSize'] = $this->blockRwSplitSize;
        }

        if (null !== $this->cache) {
            $res['Cache'] = $this->cache;
        }

        if (null !== $this->cacheSize) {
            $res['CacheSize'] = $this->cacheSize;
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
        if (isset($map['BlockRwSplit'])) {
            $model->blockRwSplit = $map['BlockRwSplit'];
        }

        if (isset($map['BlockRwSplitSize'])) {
            $model->blockRwSplitSize = $map['BlockRwSplitSize'];
        }

        if (isset($map['Cache'])) {
            $model->cache = $map['Cache'];
        }

        if (isset($map['CacheSize'])) {
            $model->cacheSize = $map['CacheSize'];
        }

        return $model;
    }
}
