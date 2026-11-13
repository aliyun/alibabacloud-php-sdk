<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;

class CreateApplicationCustomRulesResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $applicationCustomRuleIds;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'applicationCustomRuleIds' => 'ApplicationCustomRuleIds',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationCustomRuleIds)) {
            Model::validateArray($this->applicationCustomRuleIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationCustomRuleIds) {
            if (\is_array($this->applicationCustomRuleIds)) {
                $res['ApplicationCustomRuleIds'] = [];
                $n1 = 0;
                foreach ($this->applicationCustomRuleIds as $item1) {
                    $res['ApplicationCustomRuleIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ApplicationCustomRuleIds'])) {
            if (!empty($map['ApplicationCustomRuleIds'])) {
                $model->applicationCustomRuleIds = [];
                $n1 = 0;
                foreach ($map['ApplicationCustomRuleIds'] as $item1) {
                    $model->applicationCustomRuleIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
