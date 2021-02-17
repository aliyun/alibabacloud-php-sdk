<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo;

use AlibabaCloud\SDK\Ons\V20190214\Models\OnsConsumerStatusResponseBody\data\consumerConnectionInfoList\consumerConnectionInfoDo\runningDataList\consumerRunningDataDo;
use AlibabaCloud\Tea\Model;

class runningDataList extends Model
{
    /**
     * @var consumerRunningDataDo[]
     */
    public $consumerRunningDataDo;
    protected $_name = [
        'consumerRunningDataDo' => 'ConsumerRunningDataDo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consumerRunningDataDo) {
            $res['ConsumerRunningDataDo'] = [];
            if (null !== $this->consumerRunningDataDo && \is_array($this->consumerRunningDataDo)) {
                $n = 0;
                foreach ($this->consumerRunningDataDo as $item) {
                    $res['ConsumerRunningDataDo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runningDataList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsumerRunningDataDo'])) {
            if (!empty($map['ConsumerRunningDataDo'])) {
                $model->consumerRunningDataDo = [];
                $n                            = 0;
                foreach ($map['ConsumerRunningDataDo'] as $item) {
                    $model->consumerRunningDataDo[$n++] = null !== $item ? consumerRunningDataDo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
