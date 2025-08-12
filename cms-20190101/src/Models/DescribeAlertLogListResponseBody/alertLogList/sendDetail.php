<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail\channelResultList;

class sendDetail extends Model
{
    /**
     * @var channelResultList[]
     */
    public $channelResultList;

    /**
     * @var string
     */
    public $resultCode;
    protected $_name = [
        'channelResultList' => 'ChannelResultList',
        'resultCode' => 'ResultCode',
    ];

    public function validate()
    {
        if (\is_array($this->channelResultList)) {
            Model::validateArray($this->channelResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channelResultList) {
            if (\is_array($this->channelResultList)) {
                $res['ChannelResultList'] = [];
                $n1 = 0;
                foreach ($this->channelResultList as $item1) {
                    $res['ChannelResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resultCode) {
            $res['ResultCode'] = $this->resultCode;
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
        if (isset($map['ChannelResultList'])) {
            if (!empty($map['ChannelResultList'])) {
                $model->channelResultList = [];
                $n1 = 0;
                foreach ($map['ChannelResultList'] as $item1) {
                    $model->channelResultList[$n1] = channelResultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResultCode'])) {
            $model->resultCode = $map['ResultCode'];
        }

        return $model;
    }
}
