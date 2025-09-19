<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeSasPmAgentListResponseBody\sasPmAgentList;

class DescribeSasPmAgentListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var sasPmAgentList[]
     */
    public $sasPmAgentList;
    protected $_name = [
        'requestId' => 'RequestId',
        'sasPmAgentList' => 'SasPmAgentList',
    ];

    public function validate()
    {
        if (\is_array($this->sasPmAgentList)) {
            Model::validateArray($this->sasPmAgentList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->sasPmAgentList) {
            if (\is_array($this->sasPmAgentList)) {
                $res['SasPmAgentList'] = [];
                $n1 = 0;
                foreach ($this->sasPmAgentList as $item1) {
                    $res['SasPmAgentList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['SasPmAgentList'])) {
            if (!empty($map['SasPmAgentList'])) {
                $model->sasPmAgentList = [];
                $n1 = 0;
                foreach ($map['SasPmAgentList'] as $item1) {
                    $model->sasPmAgentList[$n1] = sasPmAgentList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
