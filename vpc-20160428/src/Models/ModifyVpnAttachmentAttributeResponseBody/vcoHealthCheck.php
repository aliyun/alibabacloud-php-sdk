<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ModifyVpnAttachmentAttributeResponseBody;

use AlibabaCloud\Dara\Model;

class vcoHealthCheck extends Model
{
    /**
     * @var string
     */
    public $dip;
    /**
     * @var string
     */
    public $enable;
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $policy;
    /**
     * @var int
     */
    public $retry;
    /**
     * @var string
     */
    public $sip;
    protected $_name = [
        'dip'      => 'Dip',
        'enable'   => 'Enable',
        'interval' => 'Interval',
        'policy'   => 'Policy',
        'retry'    => 'Retry',
        'sip'      => 'Sip',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dip) {
            $res['Dip'] = $this->dip;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }

        if (null !== $this->policy) {
            $res['Policy'] = $this->policy;
        }

        if (null !== $this->retry) {
            $res['Retry'] = $this->retry;
        }

        if (null !== $this->sip) {
            $res['Sip'] = $this->sip;
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
        if (isset($map['Dip'])) {
            $model->dip = $map['Dip'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }

        if (isset($map['Policy'])) {
            $model->policy = $map['Policy'];
        }

        if (isset($map['Retry'])) {
            $model->retry = $map['Retry'];
        }

        if (isset($map['Sip'])) {
            $model->sip = $map['Sip'];
        }

        return $model;
    }
}
