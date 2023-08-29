<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\PutEnableFwSwitchResponseBody\abnormalResourceStatusList;
use AlibabaCloud\Tea\Model;

class PutEnableFwSwitchResponseBody extends Model
{
    /**
     * @var abnormalResourceStatusList[]
     */
    public $abnormalResourceStatusList;

    /**
     * @description The ID of the request.
     *
     * @example B2841452-CB8D-4F7D-B247-38E1CF7334F8
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'abnormalResourceStatusList' => 'AbnormalResourceStatusList',
        'requestId'                  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalResourceStatusList) {
            $res['AbnormalResourceStatusList'] = [];
            if (null !== $this->abnormalResourceStatusList && \is_array($this->abnormalResourceStatusList)) {
                $n = 0;
                foreach ($this->abnormalResourceStatusList as $item) {
                    $res['AbnormalResourceStatusList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutEnableFwSwitchResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalResourceStatusList'])) {
            if (!empty($map['AbnormalResourceStatusList'])) {
                $model->abnormalResourceStatusList = [];
                $n                                 = 0;
                foreach ($map['AbnormalResourceStatusList'] as $item) {
                    $model->abnormalResourceStatusList[$n++] = null !== $item ? abnormalResourceStatusList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
