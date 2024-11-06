<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\PlaceSearchResponseBody\data;

use AlibabaCloud\Tea\Model;

class metadata extends Model
{
    /**
     * @var string
     */
    public $businessArea;

    /**
     * @var string
     */
    public $dailyOpeningHours;

    /**
     * @var string
     */
    public $mainTag;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $weeklyOpeningDays;
    protected $_name = [
        'businessArea'      => 'businessArea',
        'dailyOpeningHours' => 'dailyOpeningHours',
        'mainTag'           => 'mainTag',
        'tag'               => 'tag',
        'weeklyOpeningDays' => 'weeklyOpeningDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessArea) {
            $res['businessArea'] = $this->businessArea;
        }
        if (null !== $this->dailyOpeningHours) {
            $res['dailyOpeningHours'] = $this->dailyOpeningHours;
        }
        if (null !== $this->mainTag) {
            $res['mainTag'] = $this->mainTag;
        }
        if (null !== $this->tag) {
            $res['tag'] = $this->tag;
        }
        if (null !== $this->weeklyOpeningDays) {
            $res['weeklyOpeningDays'] = $this->weeklyOpeningDays;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metadata
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['businessArea'])) {
            $model->businessArea = $map['businessArea'];
        }
        if (isset($map['dailyOpeningHours'])) {
            $model->dailyOpeningHours = $map['dailyOpeningHours'];
        }
        if (isset($map['mainTag'])) {
            $model->mainTag = $map['mainTag'];
        }
        if (isset($map['tag'])) {
            $model->tag = $map['tag'];
        }
        if (isset($map['weeklyOpeningDays'])) {
            $model->weeklyOpeningDays = $map['weeklyOpeningDays'];
        }

        return $model;
    }
}
