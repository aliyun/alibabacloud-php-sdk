<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Dara\Model;

class Aps extends Model
{
    /**
     * @var Alert
     */
    public $alert;

    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $attributesType;

    /**
     * @var string
     */
    public $badge;

    /**
     * @var string
     */
    public $category;

    /**
     * @var int
     */
    public $contentAvailable;

    /**
     * @var string
     */
    public $contentState;

    /**
     * @var int
     */
    public $dismissalDate;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $interruptionLevel;

    /**
     * @var int
     */
    public $mutableContent;

    /**
     * @var string
     */
    public $sound;

    /**
     * @var string
     */
    public $threadID;

    /**
     * @var int
     */
    public $timestamp;
    protected $_name = [
        'alert' => 'alert',
        'attributes' => 'attributes',
        'attributesType' => 'attributesType',
        'badge' => 'badge',
        'category' => 'category',
        'contentAvailable' => 'contentAvailable',
        'contentState' => 'contentState',
        'dismissalDate' => 'dismissalDate',
        'event' => 'event',
        'interruptionLevel' => 'interruptionLevel',
        'mutableContent' => 'mutableContent',
        'sound' => 'sound',
        'threadID' => 'threadID',
        'timestamp' => 'timestamp',
    ];

    public function validate()
    {
        if (null !== $this->alert) {
            $this->alert->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->alert) {
            $res['alert'] = null !== $this->alert ? $this->alert->toArray($noStream) : $this->alert;
        }

        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }

        if (null !== $this->attributesType) {
            $res['attributesType'] = $this->attributesType;
        }

        if (null !== $this->badge) {
            $res['badge'] = $this->badge;
        }

        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->contentAvailable) {
            $res['contentAvailable'] = $this->contentAvailable;
        }

        if (null !== $this->contentState) {
            $res['contentState'] = $this->contentState;
        }

        if (null !== $this->dismissalDate) {
            $res['dismissalDate'] = $this->dismissalDate;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->interruptionLevel) {
            $res['interruptionLevel'] = $this->interruptionLevel;
        }

        if (null !== $this->mutableContent) {
            $res['mutableContent'] = $this->mutableContent;
        }

        if (null !== $this->sound) {
            $res['sound'] = $this->sound;
        }

        if (null !== $this->threadID) {
            $res['threadID'] = $this->threadID;
        }

        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
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
        if (isset($map['alert'])) {
            $model->alert = Alert::fromMap($map['alert']);
        }

        if (isset($map['attributes'])) {
            $model->attributes = $map['attributes'];
        }

        if (isset($map['attributesType'])) {
            $model->attributesType = $map['attributesType'];
        }

        if (isset($map['badge'])) {
            $model->badge = $map['badge'];
        }

        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['contentAvailable'])) {
            $model->contentAvailable = $map['contentAvailable'];
        }

        if (isset($map['contentState'])) {
            $model->contentState = $map['contentState'];
        }

        if (isset($map['dismissalDate'])) {
            $model->dismissalDate = $map['dismissalDate'];
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        if (isset($map['interruptionLevel'])) {
            $model->interruptionLevel = $map['interruptionLevel'];
        }

        if (isset($map['mutableContent'])) {
            $model->mutableContent = $map['mutableContent'];
        }

        if (isset($map['sound'])) {
            $model->sound = $map['sound'];
        }

        if (isset($map['threadID'])) {
            $model->threadID = $map['threadID'];
        }

        if (isset($map['timestamp'])) {
            $model->timestamp = $map['timestamp'];
        }

        return $model;
    }
}
