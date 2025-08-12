<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeAlertLogListResponseBody\alertLogList\sendDetail\channelResultList\resultList;

class channelResultList extends Model
{
    /**
     * @var string
     */
    public $channel;

    /**
     * @var resultList[]
     */
    public $resultList;
    protected $_name = [
        'channel' => 'Channel',
        'resultList' => 'ResultList',
    ];

    public function validate()
    {
        if (\is_array($this->resultList)) {
            Model::validateArray($this->resultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->resultList) {
            if (\is_array($this->resultList)) {
                $res['ResultList'] = [];
                $n1 = 0;
                foreach ($this->resultList as $item1) {
                    $res['ResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n1 = 0;
                foreach ($map['ResultList'] as $item1) {
                    $model->resultList[$n1] = resultList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
