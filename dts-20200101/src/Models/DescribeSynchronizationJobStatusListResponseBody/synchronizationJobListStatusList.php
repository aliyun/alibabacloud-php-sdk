<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dts\V20200101\Models\DescribeSynchronizationJobStatusListResponseBody\synchronizationJobListStatusList\synchronizationDirectionInfoList;

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
        if (\is_array($this->synchronizationDirectionInfoList)) {
            Model::validateArray($this->synchronizationDirectionInfoList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->synchronizationDirectionInfoList) {
            if (\is_array($this->synchronizationDirectionInfoList)) {
                $res['SynchronizationDirectionInfoList'] = [];
                $n1                                      = 0;
                foreach ($this->synchronizationDirectionInfoList as $item1) {
                    $res['SynchronizationDirectionInfoList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->synchronizationJobId) {
            $res['SynchronizationJobId'] = $this->synchronizationJobId;
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
        if (isset($map['SynchronizationDirectionInfoList'])) {
            if (!empty($map['SynchronizationDirectionInfoList'])) {
                $model->synchronizationDirectionInfoList = [];
                $n1                                      = 0;
                foreach ($map['SynchronizationDirectionInfoList'] as $item1) {
                    $model->synchronizationDirectionInfoList[$n1++] = synchronizationDirectionInfoList::fromMap($item1);
                }
            }
        }

        if (isset($map['SynchronizationJobId'])) {
            $model->synchronizationJobId = $map['SynchronizationJobId'];
        }

        return $model;
    }
}
