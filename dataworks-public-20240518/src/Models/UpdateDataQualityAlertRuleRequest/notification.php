<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityAlertRuleRequest;

use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\UpdateDataQualityAlertRuleRequest\notification\receivers;
use AlibabaCloud\Tea\Model;

class notification extends Model
{
    /**
     * @description This parameter is required.
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->channels) {
            $res['Channels'] = $this->channels;
        }
        if (null !== $this->receivers) {
            $res['Receivers'] = [];
            if (null !== $this->receivers && \is_array($this->receivers)) {
                $n = 0;
                foreach ($this->receivers as $item) {
                    $res['Receivers'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return notification
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channels'])) {
            if (!empty($map['Channels'])) {
                $model->channels = $map['Channels'];
            }
        }
        if (isset($map['Receivers'])) {
            if (!empty($map['Receivers'])) {
                $model->receivers = [];
                $n = 0;
                foreach ($map['Receivers'] as $item) {
                    $model->receivers[$n++] = null !== $item ? receivers::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
