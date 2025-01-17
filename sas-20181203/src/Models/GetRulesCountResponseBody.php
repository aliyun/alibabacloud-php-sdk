<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class GetRulesCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $totalSystemClientRuleCount;
    /**
     * @var int
     */
    public $totalUserDefineRuleCount;
    protected $_name = [
        'requestId'                  => 'RequestId',
        'totalSystemClientRuleCount' => 'TotalSystemClientRuleCount',
        'totalUserDefineRuleCount'   => 'TotalUserDefineRuleCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalSystemClientRuleCount) {
            $res['TotalSystemClientRuleCount'] = $this->totalSystemClientRuleCount;
        }

        if (null !== $this->totalUserDefineRuleCount) {
            $res['TotalUserDefineRuleCount'] = $this->totalUserDefineRuleCount;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalSystemClientRuleCount'])) {
            $model->totalSystemClientRuleCount = $map['TotalSystemClientRuleCount'];
        }

        if (isset($map['TotalUserDefineRuleCount'])) {
            $model->totalUserDefineRuleCount = $map['TotalUserDefineRuleCount'];
        }

        return $model;
    }
}
