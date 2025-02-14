<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleResponseBody\checkRules;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckRuleResponseBody\pageInfo;

class ListCheckRuleResponseBody extends Model
{
    /**
     * @var checkRules[]
     */
    public $checkRules;
    /**
     * @var pageInfo
     */
    public $pageInfo;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'checkRules' => 'CheckRules',
        'pageInfo'   => 'PageInfo',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->checkRules)) {
            Model::validateArray($this->checkRules);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkRules) {
            if (\is_array($this->checkRules)) {
                $res['CheckRules'] = [];
                $n1                = 0;
                foreach ($this->checkRules as $item1) {
                    $res['CheckRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
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
        if (isset($map['CheckRules'])) {
            if (!empty($map['CheckRules'])) {
                $model->checkRules = [];
                $n1                = 0;
                foreach ($map['CheckRules'] as $item1) {
                    $model->checkRules[$n1++] = checkRules::fromMap($item1);
                }
            }
        }

        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
