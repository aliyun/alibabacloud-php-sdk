<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail\channelResultList\resultList;
use AlibabaCloud\Tea\Model;

class channelResultList extends Model
{
    /**
     * @description The method that is used to send alert notifications. Valid values:
     *
     *   MAIL: email
     *   SMS: text message
     *   WEBHOOK: alert callback
     *   SLS: Simple Log Service
     *   ONCALL: phone call
     *   FC: Function Compute
     *   MNS: Message Service queue
     *
     * @example MAIL
     *
     * @var string
     */
    public $channel;

    /**
     * @description The sending results of alert notifications.
     *
     * @var resultList[]
     */
    public $resultList;
    protected $_name = [
        'channel'    => 'Channel',
        'resultList' => 'ResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }
        if (null !== $this->resultList) {
            $res['ResultList'] = [];
            if (null !== $this->resultList && \is_array($this->resultList)) {
                $n = 0;
                foreach ($this->resultList as $item) {
                    $res['ResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return channelResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n                 = 0;
                foreach ($map['ResultList'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
