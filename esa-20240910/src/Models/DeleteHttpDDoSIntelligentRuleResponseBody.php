<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class DeleteHttpDDoSIntelligentRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $recordName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'recordName' => 'RecordName',
        'requestId' => 'RequestId',
        'ruleId' => 'RuleId',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
