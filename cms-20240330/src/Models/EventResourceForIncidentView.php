<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class EventResourceForIncidentView extends Model
{
    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $entityType;

    /**
     * @var string
     */
    public $probs;

    /**
     * @var string
     */
    public $tags;
    protected $_name = [
        'domain' => 'domain',
        'entityId' => 'entityId',
        'entityType' => 'entityType',
        'probs' => 'probs',
        'tags' => 'tags',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }

        if (null !== $this->entityId) {
            $res['entityId'] = $this->entityId;
        }

        if (null !== $this->entityType) {
            $res['entityType'] = $this->entityType;
        }

        if (null !== $this->probs) {
            $res['probs'] = $this->probs;
        }

        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
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
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }

        if (isset($map['entityId'])) {
            $model->entityId = $map['entityId'];
        }

        if (isset($map['entityType'])) {
            $model->entityType = $map['entityType'];
        }

        if (isset($map['probs'])) {
            $model->probs = $map['probs'];
        }

        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }

        return $model;
    }
}
