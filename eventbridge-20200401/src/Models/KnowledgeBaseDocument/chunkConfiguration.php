<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\KnowledgeBaseDocument;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eventbridge\V20200401\Models\KnowledgeBaseDocument\chunkConfiguration\preprocessRules;

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
        'headingLevel' => 'HeadingLevel',
        'maxChunkSize' => 'MaxChunkSize',
        'overlapSize' => 'OverlapSize',
        'preprocessRules' => 'PreprocessRules',
        'separator' => 'Separator',
        'strategy' => 'Strategy',
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
            $res['HeadingLevel'] = $this->headingLevel;
        }

        if (null !== $this->maxChunkSize) {
            $res['MaxChunkSize'] = $this->maxChunkSize;
        }

        if (null !== $this->overlapSize) {
            $res['OverlapSize'] = $this->overlapSize;
        }

        if (null !== $this->preprocessRules) {
            $res['PreprocessRules'] = null !== $this->preprocessRules ? $this->preprocessRules->toArray($noStream) : $this->preprocessRules;
        }

        if (null !== $this->separator) {
            $res['Separator'] = $this->separator;
        }

        if (null !== $this->strategy) {
            $res['Strategy'] = $this->strategy;
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
        if (isset($map['HeadingLevel'])) {
            $model->headingLevel = $map['HeadingLevel'];
        }

        if (isset($map['MaxChunkSize'])) {
            $model->maxChunkSize = $map['MaxChunkSize'];
        }

        if (isset($map['OverlapSize'])) {
            $model->overlapSize = $map['OverlapSize'];
        }

        if (isset($map['PreprocessRules'])) {
            $model->preprocessRules = preprocessRules::fromMap($map['PreprocessRules']);
        }

        if (isset($map['Separator'])) {
            $model->separator = $map['Separator'];
        }

        if (isset($map['Strategy'])) {
            $model->strategy = $map['Strategy'];
        }

        return $model;
    }
}
