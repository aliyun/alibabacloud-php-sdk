<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody;

use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dialogHubNluInfo;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo;
use AlibabaCloud\Tea\Model;

class messages extends Model
{
    /**
     * @description 对话中控的nlu信息
     *
     * @var dialogHubNluInfo
     */
    public $dialogHubNluInfo;

    /**
     * @description 对话工厂的nlu信息
     *
     * @var dsNluInfo
     */
    public $dsNluInfo;
    protected $_name = [
        'dialogHubNluInfo' => 'DialogHubNluInfo',
        'dsNluInfo'        => 'DsNluInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dialogHubNluInfo) {
            $res['DialogHubNluInfo'] = null !== $this->dialogHubNluInfo ? $this->dialogHubNluInfo->toMap() : null;
        }
        if (null !== $this->dsNluInfo) {
            $res['DsNluInfo'] = null !== $this->dsNluInfo ? $this->dsNluInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return messages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DialogHubNluInfo'])) {
            $model->dialogHubNluInfo = dialogHubNluInfo::fromMap($map['DialogHubNluInfo']);
        }
        if (isset($map['DsNluInfo'])) {
            $model->dsNluInfo = dsNluInfo::fromMap($map['DsNluInfo']);
        }

        return $model;
    }
}
