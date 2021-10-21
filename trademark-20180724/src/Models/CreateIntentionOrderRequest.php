<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class CreateIntentionOrderRequest extends Model
{
    /**
     * @var string
     */
    public $intentionBizId;

    /**
     * @var string
     */
    public $channel;
    protected $_name = [
        'intentionBizId' => 'IntentionBizId',
        'channel'        => 'Channel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->intentionBizId) {
            $res['IntentionBizId'] = $this->intentionBizId;
        }
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateIntentionOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IntentionBizId'])) {
            $model->intentionBizId = $map['IntentionBizId'];
        }
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        return $model;
    }
}
