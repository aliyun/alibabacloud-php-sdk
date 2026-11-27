<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models;

use AlibabaCloud\Dara\Model;

class ListMcpsRequest extends Model
{
    /**
     * @var string
     */
    public $customTag;

    /**
     * @var bool
     */
    public $includeVirtualConfig;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $officialTag;

    /**
     * @var string
     */
    public $searchType;

    /**
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $usageActive;
    protected $_name = [
        'customTag' => 'customTag',
        'includeVirtualConfig' => 'includeVirtualConfig',
        'maxResults' => 'maxResults',
        'name' => 'name',
        'nextToken' => 'nextToken',
        'officialTag' => 'officialTag',
        'searchType' => 'searchType',
        'type' => 'type',
        'usageActive' => 'usageActive',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customTag) {
            $res['customTag'] = $this->customTag;
        }

        if (null !== $this->includeVirtualConfig) {
            $res['includeVirtualConfig'] = $this->includeVirtualConfig;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->officialTag) {
            $res['officialTag'] = $this->officialTag;
        }

        if (null !== $this->searchType) {
            $res['searchType'] = $this->searchType;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->usageActive) {
            $res['usageActive'] = $this->usageActive;
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
        if (isset($map['customTag'])) {
            $model->customTag = $map['customTag'];
        }

        if (isset($map['includeVirtualConfig'])) {
            $model->includeVirtualConfig = $map['includeVirtualConfig'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['officialTag'])) {
            $model->officialTag = $map['officialTag'];
        }

        if (isset($map['searchType'])) {
            $model->searchType = $map['searchType'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['usageActive'])) {
            $model->usageActive = $map['usageActive'];
        }

        return $model;
    }
}
