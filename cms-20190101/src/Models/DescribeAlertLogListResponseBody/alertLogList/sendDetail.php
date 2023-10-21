<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail\channelResultList;
use AlibabaCloud\Tea\Model;

class sendDetail extends Model
{
    /**
     * @description The list of sending results that are categorized by notification method.
     *
     * @var channelResultList[]
     */
    public $channelResultList;

    /**
     * @description Indicates whether the alert notifications are sent.
     *
     *   If the alert notifications are sent, the value "success" is returned.
     *   If the configuration is invalid, no alert notification is sent and an error code is returned.
     *
     * @example success
     *
     * @var string
     */
    public $resultCode;
    protected $_name = [
        'channelResultList' => 'ChannelResultList',
        'resultCode'        => 'ResultCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channelResultList) {
            $res['ChannelResultList'] = [];
            if (null !== $this->channelResultList && \is_array($this->channelResultList)) {
                $n = 0;
                foreach ($this->channelResultList as $item) {
                    $res['ChannelResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sendDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ChannelResultList'])) {
            if (!empty($map['ChannelResultList'])) {
                $model->channelResultList = [];
                $n                        = 0;
                foreach ($map['ChannelResultList'] as $item) {
                    $model->channelResultList[$n++] = null !== $item ? channelResultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        return $model;
    }
}
