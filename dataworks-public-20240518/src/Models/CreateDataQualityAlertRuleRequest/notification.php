<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityAlertRuleRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\CreateDataQualityAlertRuleRequest\notification\receivers;

class notification extends Model
{
    /**
     * @var string[]
     */
    public $channels;

    /**
     * @var receivers[]
     */
    public $receivers;
    protected $_name = [
        'channels' => 'Channels',
        'receivers' => 'Receivers',
    ];

    public function validate()
    {
        if (\is_array($this->channels)) {
            Model::validateArray($this->channels);
        }
        if (\is_array($this->receivers)) {
            Model::validateArray($this->receivers);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channels) {
            if (\is_array($this->channels)) {
                $res['Channels'] = [];
                $n1 = 0;
                foreach ($this->channels as $item1) {
                    $res['Channels'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->receivers) {
            if (\is_array($this->receivers)) {
                $res['Receivers'] = [];
                $n1 = 0;
                foreach ($this->receivers as $item1) {
                    $res['Receivers'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = [];
                $n1 = 0;
                foreach ($map['Channels'] as $item1) {
                    $model->channels[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = [];
                $n1 = 0;
                foreach ($map['Receivers'] as $item1) {
                    $model->receivers[$n1] = receivers::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
