<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\UpdateMsgRecallIntervalRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @example 12000
     *
     * @var int
     */
    public $clientMsgRecallIntervalMinute;
    protected $_name = [
        'clientMsgRecallIntervalMinute' => 'ClientMsgRecallIntervalMinute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientMsgRecallIntervalMinute) {
            $res['ClientMsgRecallIntervalMinute'] = $this->clientMsgRecallIntervalMinute;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientMsgRecallIntervalMinute'])) {
            $model->clientMsgRecallIntervalMinute = $map['ClientMsgRecallIntervalMinute'];
        }

        return $model;
    }
}
