<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class GetClusterInspectReportDetailRequest extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var bool
     */
    public $enableFilter;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $level;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'category' => 'category',
        'enableFilter' => 'enableFilter',
        'language' => 'language',
        'level' => 'level',
        'maxResults' => 'maxResults',
        'nextToken' => 'nextToken',
        'targetType' => 'targetType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->enableFilter) {
            $res['enableFilter'] = $this->enableFilter;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->level) {
            $res['level'] = $this->level;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->targetType) {
            $res['targetType'] = $this->targetType;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['enableFilter'])) {
            $model->enableFilter = $map['enableFilter'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['level'])) {
            $model->level = $map['level'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['targetType'])) {
            $model->targetType = $map['targetType'];
        }

        return $model;
    }
}
