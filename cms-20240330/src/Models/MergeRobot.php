<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\MergeRobot\extend;

class MergeRobot extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var extend
     */
    public $extend;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $identifier;

    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $webhook;
    protected $_name = [
        'createTime' => 'createTime',
        'extend' => 'extend',
        'gmtModified' => 'gmtModified',
        'identifier' => 'identifier',
        'lang' => 'lang',
        'name' => 'name',
        'source' => 'source',
        'type' => 'type',
        'webhook' => 'webhook',
    ];

    public function validate()
    {
        if (null !== $this->extend) {
            $this->extend->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->extend) {
            $res['extend'] = null !== $this->extend ? $this->extend->toArray($noStream) : $this->extend;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->webhook) {
            $res['webhook'] = $this->webhook;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['extend'])) {
            $model->extend = extend::fromMap($map['extend']);
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['webhook'])) {
            $model->webhook = $map['webhook'];
        }

        return $model;
    }
}
