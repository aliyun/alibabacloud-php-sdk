<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeFreeUserEventsResponseBody;

use AlibabaCloud\Dara\Model;

class event extends Model
{
    /**
     * @var string
     */
    public $apiFormat;
    /**
     * @var string
     */
    public $attackIP;
    /**
     * @var int
     */
    public $attackTime;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var string
     */
    public $eventLevel;
    /**
     * @var string
     */
    public $eventTag;
    protected $_name = [
        'apiFormat'  => 'ApiFormat',
        'attackIP'   => 'AttackIP',
        'attackTime' => 'AttackTime',
        'domain'     => 'Domain',
        'eventLevel' => 'EventLevel',
        'eventTag'   => 'EventTag',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }

        if (null !== $this->attackIP) {
            $res['AttackIP'] = $this->attackIP;
        }

        if (null !== $this->attackTime) {
            $res['AttackTime'] = $this->attackTime;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->eventLevel) {
            $res['EventLevel'] = $this->eventLevel;
        }

        if (null !== $this->eventTag) {
            $res['EventTag'] = $this->eventTag;
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
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }

        if (isset($map['AttackIP'])) {
            $model->attackIP = $map['AttackIP'];
        }

        if (isset($map['AttackTime'])) {
            $model->attackTime = $map['AttackTime'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['EventLevel'])) {
            $model->eventLevel = $map['EventLevel'];
        }

        if (isset($map['EventTag'])) {
            $model->eventTag = $map['EventTag'];
        }

        return $model;
    }
}
