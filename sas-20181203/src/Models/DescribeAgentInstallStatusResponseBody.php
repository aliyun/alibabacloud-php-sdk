<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAgentInstallStatusResponseBody\aegisClientInvokeStatusResponseList;

class DescribeAgentInstallStatusResponseBody extends Model
{
    /**
     * @var aegisClientInvokeStatusResponseList[]
     */
    public $aegisClientInvokeStatusResponseList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aegisClientInvokeStatusResponseList' => 'AegisClientInvokeStatusResponseList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aegisClientInvokeStatusResponseList)) {
            Model::validateArray($this->aegisClientInvokeStatusResponseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aegisClientInvokeStatusResponseList) {
            if (\is_array($this->aegisClientInvokeStatusResponseList)) {
                $res['AegisClientInvokeStatusResponseList'] = [];
                $n1 = 0;
                foreach ($this->aegisClientInvokeStatusResponseList as $item1) {
                    $res['AegisClientInvokeStatusResponseList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AegisClientInvokeStatusResponseList'])) {
            if (!empty($map['AegisClientInvokeStatusResponseList'])) {
                $model->aegisClientInvokeStatusResponseList = [];
                $n1 = 0;
                foreach ($map['AegisClientInvokeStatusResponseList'] as $item1) {
                    $model->aegisClientInvokeStatusResponseList[$n1] = aegisClientInvokeStatusResponseList::fromMap($item1);
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
