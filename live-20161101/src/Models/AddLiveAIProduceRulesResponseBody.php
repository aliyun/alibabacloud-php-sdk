<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class AddLiveAIProduceRulesResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 5c6a2a0df228-4a64-af62-20e91b96****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the subtitle rule.
     *
     * @example 445409ec-7eaa-461d-8f29-4bec2eb9****
     *
     * @var string
     */
    public $rulesId;
    protected $_name = [
        'requestId' => 'RequestId',
        'rulesId' => 'RulesId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rulesId) {
            $res['RulesId'] = $this->rulesId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddLiveAIProduceRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RulesId'])) {
            $model->rulesId = $map['RulesId'];
        }

        return $model;
    }
}
