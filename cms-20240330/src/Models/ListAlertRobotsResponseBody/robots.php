<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListAlertRobotsResponseBody;

use AlibabaCloud\Dara\Model;

class robots extends Model
{
    /**
     * @var string
     */
    public $digitalEmployeeName;

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
    public $robotId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'digitalEmployeeName' => 'digitalEmployeeName',
        'lang' => 'lang',
        'name' => 'name',
        'robotId' => 'robotId',
        'type' => 'type',
        'url' => 'url',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->digitalEmployeeName) {
            $res['digitalEmployeeName'] = $this->digitalEmployeeName;
        }

        if (null !== $this->lang) {
            $res['lang'] = $this->lang;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->robotId) {
            $res['robotId'] = $this->robotId;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['digitalEmployeeName'])) {
            $model->digitalEmployeeName = $map['digitalEmployeeName'];
        }

        if (isset($map['lang'])) {
            $model->lang = $map['lang'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['robotId'])) {
            $model->robotId = $map['robotId'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
