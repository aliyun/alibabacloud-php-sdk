<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20241212\Models\GetResponseRuleStatisticResponseBody;

use AlibabaCloud\Dara\Model;

class responseStatistic extends Model
{
    /**
     * @var int
     */
    public $responseRuleAllCount;

    /**
     * @var int
     */
    public $responseRuleOnlineCount;
    protected $_name = [
        'responseRuleAllCount' => 'ResponseRuleAllCount',
        'responseRuleOnlineCount' => 'ResponseRuleOnlineCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->responseRuleAllCount) {
            $res['ResponseRuleAllCount'] = $this->responseRuleAllCount;
        }

        if (null !== $this->responseRuleOnlineCount) {
            $res['ResponseRuleOnlineCount'] = $this->responseRuleOnlineCount;
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
        if (isset($map['ResponseRuleAllCount'])) {
            $model->responseRuleAllCount = $map['ResponseRuleAllCount'];
        }

        if (isset($map['ResponseRuleOnlineCount'])) {
            $model->responseRuleOnlineCount = $map['ResponseRuleOnlineCount'];
        }

        return $model;
    }
}
