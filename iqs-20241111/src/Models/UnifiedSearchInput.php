<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241111\Models;

use AlibabaCloud\Dara\Model;

class UnifiedSearchInput extends Model
{
    /**
     * @var mixed[]
     */
    public $advancedParams;

    /**
     * @var string
     */
    public $category;

    /**
     * @var RequestContents
     */
    public $contents;

    /**
     * @var string
     */
    public $engineType;

    /**
     * @var string
     */
    public $location;

    /**
     * @var LocationInfo
     */
    public $locationInfo;

    /**
     * @var string
     */
    public $query;

    /**
     * @var string
     */
    public $timeRange;
    protected $_name = [
        'advancedParams' => 'advancedParams',
        'category' => 'category',
        'contents' => 'contents',
        'engineType' => 'engineType',
        'location' => 'location',
        'locationInfo' => 'locationInfo',
        'query' => 'query',
        'timeRange' => 'timeRange',
    ];

    public function validate()
    {
        if (\is_array($this->advancedParams)) {
            Model::validateArray($this->advancedParams);
        }
        if (null !== $this->contents) {
            $this->contents->validate();
        }
        if (null !== $this->locationInfo) {
            $this->locationInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedParams) {
            if (\is_array($this->advancedParams)) {
                $res['advancedParams'] = [];
                foreach ($this->advancedParams as $key1 => $value1) {
                    $res['advancedParams'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->contents) {
            $res['contents'] = null !== $this->contents ? $this->contents->toArray($noStream) : $this->contents;
        }

        if (null !== $this->engineType) {
            $res['engineType'] = $this->engineType;
        }

        if (null !== $this->location) {
            $res['location'] = $this->location;
        }

        if (null !== $this->locationInfo) {
            $res['locationInfo'] = null !== $this->locationInfo ? $this->locationInfo->toArray($noStream) : $this->locationInfo;
        }

        if (null !== $this->query) {
            $res['query'] = $this->query;
        }

        if (null !== $this->timeRange) {
            $res['timeRange'] = $this->timeRange;
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
        if (isset($map['advancedParams'])) {
            if (!empty($map['advancedParams'])) {
                $model->advancedParams = [];
                foreach ($map['advancedParams'] as $key1 => $value1) {
                    $model->advancedParams[$key1] = $value1;
                }
            }
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['contents'])) {
            $model->contents = RequestContents::fromMap($map['contents']);
        }

        if (isset($map['engineType'])) {
            $model->engineType = $map['engineType'];
        }

        if (isset($map['location'])) {
            $model->location = $map['location'];
        }

        if (isset($map['locationInfo'])) {
            $model->locationInfo = LocationInfo::fromMap($map['locationInfo']);
        }

        if (isset($map['query'])) {
            $model->query = $map['query'];
        }

        if (isset($map['timeRange'])) {
            $model->timeRange = $map['timeRange'];
        }

        return $model;
    }
}
