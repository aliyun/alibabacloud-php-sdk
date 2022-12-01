<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\Tea\Model;

class Aps extends Model
{
    /**
     * @var Alert
     */
    public $alert;

    /**
     * @var int
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
    public $interruptionLevel;

    /**
     * @var string
     */
    public $sound;
    protected $_name = [
        'alert'             => 'alert',
        'badge'             => 'badge',
        'category'          => 'category',
        'contentAvailable'  => 'contentAvailable',
        'interruptionLevel' => 'interruptionLevel',
        'sound'             => 'sound',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alert) {
            $res['alert'] = null !== $this->alert ? $this->alert->toMap() : null;
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
        if (null !== $this->interruptionLevel) {
            $res['interruptionLevel'] = $this->interruptionLevel;
        }
        if (null !== $this->sound) {
            $res['sound'] = $this->sound;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Aps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['alert'])) {
            $model->alert = Alert::fromMap($map['alert']);
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
        if (isset($map['interruptionLevel'])) {
            $model->interruptionLevel = $map['interruptionLevel'];
        }
        if (isset($map['sound'])) {
            $model->sound = $map['sound'];
        }

        return $model;
    }
}
