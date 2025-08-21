<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dialogHubNluInfo;
use AlibabaCloud\SDK\Chatbot\V20220408\Models\NluResponseBody\messages\dsNluInfo;

class messages extends Model
{
    /**
     * @var dialogHubNluInfo
     */
    public $dialogHubNluInfo;

    /**
     * @var dsNluInfo
     */
    public $dsNluInfo;
    protected $_name = [
        'dialogHubNluInfo' => 'DialogHubNluInfo',
        'dsNluInfo' => 'DsNluInfo',
    ];

    public function validate()
    {
        if (null !== $this->dialogHubNluInfo) {
            $this->dialogHubNluInfo->validate();
        }
        if (null !== $this->dsNluInfo) {
            $this->dsNluInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dialogHubNluInfo) {
            $res['DialogHubNluInfo'] = null !== $this->dialogHubNluInfo ? $this->dialogHubNluInfo->toArray($noStream) : $this->dialogHubNluInfo;
        }

        if (null !== $this->dsNluInfo) {
            $res['DsNluInfo'] = null !== $this->dsNluInfo ? $this->dsNluInfo->toArray($noStream) : $this->dsNluInfo;
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
        if (isset($map['DialogHubNluInfo'])) {
            $model->dialogHubNluInfo = dialogHubNluInfo::fromMap($map['DialogHubNluInfo']);
        }

        if (isset($map['DsNluInfo'])) {
            $model->dsNluInfo = dsNluInfo::fromMap($map['DsNluInfo']);
        }

        return $model;
    }
}
