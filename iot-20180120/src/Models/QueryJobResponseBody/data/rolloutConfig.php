<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryJobResponseBody\data;

use AlibabaCloud\Tea\Model;

class rolloutConfig extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $maximumPerMinute;

    /**
     * @example Qos1
     *
     * @var string
     */
    public $messageQoS;
    protected $_name = [
        'maximumPerMinute' => 'MaximumPerMinute',
        'messageQoS'       => 'MessageQoS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maximumPerMinute) {
            $res['MaximumPerMinute'] = $this->maximumPerMinute;
        }
        if (null !== $this->messageQoS) {
            $res['MessageQoS'] = $this->messageQoS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rolloutConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaximumPerMinute'])) {
            $model->maximumPerMinute = $map['MaximumPerMinute'];
        }
        if (isset($map['MessageQoS'])) {
            $model->messageQoS = $map['MessageQoS'];
        }

        return $model;
    }
}
