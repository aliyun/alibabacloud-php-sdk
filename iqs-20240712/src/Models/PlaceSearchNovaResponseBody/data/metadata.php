<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20240712\Models\PlaceSearchNovaResponseBody\data;

use AlibabaCloud\Tea\Model;

class metadata extends Model
{
    /**
     * @example 78
     *
     * @var string
     */
    public $averageSpend;

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
     * @example 010-83847583
     *
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $score;

    /**
     * @example [{\\"value\\":\\"nttd\\",\\"key\\":\\"owner\\"}]
     *
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $weeklyOpeningDays;
    protected $_name = [
        'averageSpend'      => 'averageSpend',
        'businessArea'      => 'businessArea',
        'dailyOpeningHours' => 'dailyOpeningHours',
        'mainTag'           => 'mainTag',
        'phone'             => 'phone',
        'score'             => 'score',
        'tag'               => 'tag',
        'weeklyOpeningDays' => 'weeklyOpeningDays',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->averageSpend) {
            $res['averageSpend'] = $this->averageSpend;
        }
        if (null !== $this->businessArea) {
            $res['businessArea'] = $this->businessArea;
        }
        if (null !== $this->dailyOpeningHours) {
            $res['dailyOpeningHours'] = $this->dailyOpeningHours;
        }
        if (null !== $this->mainTag) {
            $res['mainTag'] = $this->mainTag;
        }
        if (null !== $this->phone) {
            $res['phone'] = $this->phone;
        }
        if (null !== $this->score) {
            $res['score'] = $this->score;
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
        if (isset($map['averageSpend'])) {
            $model->averageSpend = $map['averageSpend'];
        }
        if (isset($map['businessArea'])) {
            $model->businessArea = $map['businessArea'];
        }
        if (isset($map['dailyOpeningHours'])) {
            $model->dailyOpeningHours = $map['dailyOpeningHours'];
        }
        if (isset($map['mainTag'])) {
            $model->mainTag = $map['mainTag'];
        }
        if (isset($map['phone'])) {
            $model->phone = $map['phone'];
        }
        if (isset($map['score'])) {
            $model->score = $map['score'];
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
