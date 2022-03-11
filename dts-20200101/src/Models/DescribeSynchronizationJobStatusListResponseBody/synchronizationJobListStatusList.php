<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusListResponseBody;

use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusListResponseBody\synchronizationJobListStatusList\synchronizationDirectionInfoList;
use AlibabaCloud\Tea\Model;

class synchronizationJobListStatusList extends Model
{
    /**
     * @var synchronizationDirectionInfoList[]
     */
    public $synchronizationDirectionInfoList;

    /**
     * @var string
     */
    public $synchronizationJobId;
    protected $_name = [
        'synchronizationDirectionInfoList' => 'SynchronizationDirectionInfoList',
        'synchronizationJobId'             => 'SynchronizationJobId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->synchronizationDirectionInfoList) {
            $res['SynchronizationDirectionInfoList'] = [];
            if (null !== $this->synchronizationDirectionInfoList && \is_array($this->synchronizationDirectionInfoList)) {
                $n = 0;
                foreach ($this->synchronizationDirectionInfoList as $item) {
                    $res['SynchronizationDirectionInfoList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return synchronizationJobListStatusList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SynchronizationDirectionInfoList'])) {
            if (!empty($map['SynchronizationDirectionInfoList'])) {
                $model->synchronizationDirectionInfoList = [];
                $n                                       = 0;
                foreach ($map['SynchronizationDirectionInfoList'] as $item) {
                    $model->synchronizationDirectionInfoList[$n++] = null !== $item ? synchronizationDirectionInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }

        return $model;
    }
}
