<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchResponseBody\abnormalResourceStatusList;

class PutEnableFwSwitchResponseBody extends Model
{
    /**
     * @var abnormalResourceStatusList[]
     */
    public $abnormalResourceStatusList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'abnormalResourceStatusList' => 'AbnormalResourceStatusList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->abnormalResourceStatusList)) {
            Model::validateArray($this->abnormalResourceStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abnormalResourceStatusList) {
            if (\is_array($this->abnormalResourceStatusList)) {
                $res['AbnormalResourceStatusList'] = [];
                $n1 = 0;
                foreach ($this->abnormalResourceStatusList as $item1) {
                    $res['AbnormalResourceStatusList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AbnormalResourceStatusList'])) {
            if (!empty($map['AbnormalResourceStatusList'])) {
                $model->abnormalResourceStatusList = [];
                $n1 = 0;
                foreach ($map['AbnormalResourceStatusList'] as $item1) {
                    $model->abnormalResourceStatusList[$n1] = abnormalResourceStatusList::fromMap($item1);
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
