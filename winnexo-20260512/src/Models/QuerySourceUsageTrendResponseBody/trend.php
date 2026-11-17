<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WinNexo\V20260512\Models\QuerySourceUsageTrendResponseBody;

use AlibabaCloud\Dara\Model;

class trend extends Model
{
    /**
     * @var string
     */
    public $bucketStart;

    /**
     * @var int
     */
    public $retrievalCount;

    /**
     * @var int
     */
    public $retrievedSourceCount;

    /**
     * @var int
     */
    public $sourceCount;

    /**
     * @var int
     */
    public $usageCount;

    /**
     * @var int
     */
    public $usedSourceCount;
    protected $_name = [
        'bucketStart' => 'bucketStart',
        'retrievalCount' => 'retrievalCount',
        'retrievedSourceCount' => 'retrievedSourceCount',
        'sourceCount' => 'sourceCount',
        'usageCount' => 'usageCount',
        'usedSourceCount' => 'usedSourceCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bucketStart) {
            $res['bucketStart'] = $this->bucketStart;
        }

        if (null !== $this->retrievalCount) {
            $res['retrievalCount'] = $this->retrievalCount;
        }

        if (null !== $this->retrievedSourceCount) {
            $res['retrievedSourceCount'] = $this->retrievedSourceCount;
        }

        if (null !== $this->sourceCount) {
            $res['sourceCount'] = $this->sourceCount;
        }

        if (null !== $this->usageCount) {
            $res['usageCount'] = $this->usageCount;
        }

        if (null !== $this->usedSourceCount) {
            $res['usedSourceCount'] = $this->usedSourceCount;
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
        if (isset($map['bucketStart'])) {
            $model->bucketStart = $map['bucketStart'];
        }

        if (isset($map['retrievalCount'])) {
            $model->retrievalCount = $map['retrievalCount'];
        }

        if (isset($map['retrievedSourceCount'])) {
            $model->retrievedSourceCount = $map['retrievedSourceCount'];
        }

        if (isset($map['sourceCount'])) {
            $model->sourceCount = $map['sourceCount'];
        }

        if (isset($map['usageCount'])) {
            $model->usageCount = $map['usageCount'];
        }

        if (isset($map['usedSourceCount'])) {
            $model->usedSourceCount = $map['usedSourceCount'];
        }

        return $model;
    }
}
