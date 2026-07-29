<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\ModifyPolicyRequest\content;

use AlibabaCloud\Dara\Model;

class sipDefense extends Model
{
    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $level;

    /**
     * @var bool
     */
    public $sipDefend;

    /**
     * @var bool
     */
    public $sipLearn;

    /**
     * @var bool
     */
    public $sipModule;

    /**
     * @var string
     */
    public $sipPort;

    /**
     * @var int
     */
    public $sipRate;

    /**
     * @var int
     */
    public $sipStartMbps;

    /**
     * @var int
     */
    public $sipStartPps;
    protected $_name = [
        'enable' => 'Enable',
        'level' => 'Level',
        'sipDefend' => 'SipDefend',
        'sipLearn' => 'SipLearn',
        'sipModule' => 'SipModule',
        'sipPort' => 'SipPort',
        'sipRate' => 'SipRate',
        'sipStartMbps' => 'SipStartMbps',
        'sipStartPps' => 'SipStartPps',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->sipDefend) {
            $res['SipDefend'] = $this->sipDefend;
        }

        if (null !== $this->sipLearn) {
            $res['SipLearn'] = $this->sipLearn;
        }

        if (null !== $this->sipModule) {
            $res['SipModule'] = $this->sipModule;
        }

        if (null !== $this->sipPort) {
            $res['SipPort'] = $this->sipPort;
        }

        if (null !== $this->sipRate) {
            $res['SipRate'] = $this->sipRate;
        }

        if (null !== $this->sipStartMbps) {
            $res['SipStartMbps'] = $this->sipStartMbps;
        }

        if (null !== $this->sipStartPps) {
            $res['SipStartPps'] = $this->sipStartPps;
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
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['SipDefend'])) {
            $model->sipDefend = $map['SipDefend'];
        }

        if (isset($map['SipLearn'])) {
            $model->sipLearn = $map['SipLearn'];
        }

        if (isset($map['SipModule'])) {
            $model->sipModule = $map['SipModule'];
        }

        if (isset($map['SipPort'])) {
            $model->sipPort = $map['SipPort'];
        }

        if (isset($map['SipRate'])) {
            $model->sipRate = $map['SipRate'];
        }

        if (isset($map['SipStartMbps'])) {
            $model->sipStartMbps = $map['SipStartMbps'];
        }

        if (isset($map['SipStartPps'])) {
            $model->sipStartPps = $map['SipStartPps'];
        }

        return $model;
    }
}
