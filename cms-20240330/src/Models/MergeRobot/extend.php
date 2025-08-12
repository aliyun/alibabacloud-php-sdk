<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\MergeRobot;

use AlibabaCloud\Dara\Model;

class extend extends Model
{
    /**
     * @var string
     */
    public $cardTemplate;

    /**
     * @var bool
     */
    public $dailyNoc;

    /**
     * @var string
     */
    public $dailyNocTime;

    /**
     * @var string
     */
    public $dingSignKey;

    /**
     * @var bool
     */
    public $enableOutgoing;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'cardTemplate' => 'cardTemplate',
        'dailyNoc' => 'dailyNoc',
        'dailyNocTime' => 'dailyNocTime',
        'dingSignKey' => 'dingSignKey',
        'enableOutgoing' => 'enableOutgoing',
        'token' => 'token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cardTemplate) {
            $res['cardTemplate'] = $this->cardTemplate;
        }

        if (null !== $this->dailyNoc) {
            $res['dailyNoc'] = $this->dailyNoc;
        }

        if (null !== $this->dailyNocTime) {
            $res['dailyNocTime'] = $this->dailyNocTime;
        }

        if (null !== $this->dingSignKey) {
            $res['dingSignKey'] = $this->dingSignKey;
        }

        if (null !== $this->enableOutgoing) {
            $res['enableOutgoing'] = $this->enableOutgoing;
        }

        if (null !== $this->token) {
            $res['token'] = $this->token;
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
        if (isset($map['cardTemplate'])) {
            $model->cardTemplate = $map['cardTemplate'];
        }

        if (isset($map['dailyNoc'])) {
            $model->dailyNoc = $map['dailyNoc'];
        }

        if (isset($map['dailyNocTime'])) {
            $model->dailyNocTime = $map['dailyNocTime'];
        }

        if (isset($map['dingSignKey'])) {
            $model->dingSignKey = $map['dingSignKey'];
        }

        if (isset($map['enableOutgoing'])) {
            $model->enableOutgoing = $map['enableOutgoing'];
        }

        if (isset($map['token'])) {
            $model->token = $map['token'];
        }

        return $model;
    }
}
