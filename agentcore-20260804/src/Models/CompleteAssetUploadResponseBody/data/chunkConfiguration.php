<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\CompleteAssetUploadResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\CompleteAssetUploadResponseBody\data\chunkConfiguration\preprocessRules;

class chunkConfiguration extends Model
{
    /**
     * @var int
     */
    public $headingLevel;

    /**
     * @var int
     */
    public $maxChunkSize;

    /**
     * @var int
     */
    public $overlapSize;

    /**
     * @var preprocessRules
     */
    public $preprocessRules;

    /**
     * @var string
     */
    public $separator;

    /**
     * @var string
     */
    public $strategy;
    protected $_name = [
        'headingLevel' => 'headingLevel',
        'maxChunkSize' => 'maxChunkSize',
        'overlapSize' => 'overlapSize',
        'preprocessRules' => 'preprocessRules',
        'separator' => 'separator',
        'strategy' => 'strategy',
    ];

    public function validate()
    {
        if (null !== $this->preprocessRules) {
            $this->preprocessRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headingLevel) {
            $res['headingLevel'] = $this->headingLevel;
        }

        if (null !== $this->maxChunkSize) {
            $res['maxChunkSize'] = $this->maxChunkSize;
        }

        if (null !== $this->overlapSize) {
            $res['overlapSize'] = $this->overlapSize;
        }

        if (null !== $this->preprocessRules) {
            $res['preprocessRules'] = null !== $this->preprocessRules ? $this->preprocessRules->toArray($noStream) : $this->preprocessRules;
        }

        if (null !== $this->separator) {
            $res['separator'] = $this->separator;
        }

        if (null !== $this->strategy) {
            $res['strategy'] = $this->strategy;
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
        if (isset($map['headingLevel'])) {
            $model->headingLevel = $map['headingLevel'];
        }

        if (isset($map['maxChunkSize'])) {
            $model->maxChunkSize = $map['maxChunkSize'];
        }

        if (isset($map['overlapSize'])) {
            $model->overlapSize = $map['overlapSize'];
        }

        if (isset($map['preprocessRules'])) {
            $model->preprocessRules = preprocessRules::fromMap($map['preprocessRules']);
        }

        if (isset($map['separator'])) {
            $model->separator = $map['separator'];
        }

        if (isset($map['strategy'])) {
            $model->strategy = $map['strategy'];
        }

        return $model;
    }
}
