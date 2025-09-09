<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Push\V20160801\Models\PushTask\notification\ios\liveActivity;

class ios extends Model
{
    /**
     * @var string
     */
    public $apnsEnv;

    /**
     * @var int
     */
    public $badge;

    /**
     * @var bool
     */
    public $badgeAutoIncrement;

    /**
     * @var string
     */
    public $category;

    /**
     * @var string
     */
    public $collapseId;

    /**
     * @var string
     */
    public $extParameters;

    /**
     * @var string
     */
    public $interruptionLevel;

    /**
     * @var liveActivity
     */
    public $liveActivity;

    /**
     * @var string
     */
    public $music;

    /**
     * @var bool
     */
    public $mutable;

    /**
     * @var float
     */
    public $relevanceScore;

    /**
     * @var bool
     */
    public $silent;

    /**
     * @var string
     */
    public $subtitle;

    /**
     * @var string
     */
    public $threadId;
    protected $_name = [
        'apnsEnv' => 'ApnsEnv',
        'badge' => 'Badge',
        'badgeAutoIncrement' => 'BadgeAutoIncrement',
        'category' => 'Category',
        'collapseId' => 'CollapseId',
        'extParameters' => 'ExtParameters',
        'interruptionLevel' => 'InterruptionLevel',
        'liveActivity' => 'LiveActivity',
        'music' => 'Music',
        'mutable' => 'Mutable',
        'relevanceScore' => 'RelevanceScore',
        'silent' => 'Silent',
        'subtitle' => 'Subtitle',
        'threadId' => 'ThreadId',
    ];

    public function validate()
    {
        if (null !== $this->liveActivity) {
            $this->liveActivity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apnsEnv) {
            $res['ApnsEnv'] = $this->apnsEnv;
        }

        if (null !== $this->badge) {
            $res['Badge'] = $this->badge;
        }

        if (null !== $this->badgeAutoIncrement) {
            $res['BadgeAutoIncrement'] = $this->badgeAutoIncrement;
        }

        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        if (null !== $this->collapseId) {
            $res['CollapseId'] = $this->collapseId;
        }

        if (null !== $this->extParameters) {
            $res['ExtParameters'] = $this->extParameters;
        }

        if (null !== $this->interruptionLevel) {
            $res['InterruptionLevel'] = $this->interruptionLevel;
        }

        if (null !== $this->liveActivity) {
            $res['LiveActivity'] = null !== $this->liveActivity ? $this->liveActivity->toArray($noStream) : $this->liveActivity;
        }

        if (null !== $this->music) {
            $res['Music'] = $this->music;
        }

        if (null !== $this->mutable) {
            $res['Mutable'] = $this->mutable;
        }

        if (null !== $this->relevanceScore) {
            $res['RelevanceScore'] = $this->relevanceScore;
        }

        if (null !== $this->silent) {
            $res['Silent'] = $this->silent;
        }

        if (null !== $this->subtitle) {
            $res['Subtitle'] = $this->subtitle;
        }

        if (null !== $this->threadId) {
            $res['ThreadId'] = $this->threadId;
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
        if (isset($map['ApnsEnv'])) {
            $model->apnsEnv = $map['ApnsEnv'];
        }

        if (isset($map['Badge'])) {
            $model->badge = $map['Badge'];
        }

        if (isset($map['BadgeAutoIncrement'])) {
            $model->badgeAutoIncrement = $map['BadgeAutoIncrement'];
        }

        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        if (isset($map['CollapseId'])) {
            $model->collapseId = $map['CollapseId'];
        }

        if (isset($map['ExtParameters'])) {
            $model->extParameters = $map['ExtParameters'];
        }

        if (isset($map['InterruptionLevel'])) {
            $model->interruptionLevel = $map['InterruptionLevel'];
        }

        if (isset($map['LiveActivity'])) {
            $model->liveActivity = liveActivity::fromMap($map['LiveActivity']);
        }

        if (isset($map['Music'])) {
            $model->music = $map['Music'];
        }

        if (isset($map['Mutable'])) {
            $model->mutable = $map['Mutable'];
        }

        if (isset($map['RelevanceScore'])) {
            $model->relevanceScore = $map['RelevanceScore'];
        }

        if (isset($map['Silent'])) {
            $model->silent = $map['Silent'];
        }

        if (isset($map['Subtitle'])) {
            $model->subtitle = $map['Subtitle'];
        }

        if (isset($map['ThreadId'])) {
            $model->threadId = $map['ThreadId'];
        }

        return $model;
    }
}
