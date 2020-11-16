<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordDataResponse;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainRecordDataResponse\recordDataInfos\recordDataInfo;
use AlibabaCloud\Tea\Model;

class recordDataInfos extends Model
{
    /**
     * @var recordDataInfo[]
     */
    public $recordDataInfo;
    protected $_name = [
        'recordDataInfo' => 'RecordDataInfo',
    ];

    public function validate()
    {
        Model::validateRequired('recordDataInfo', $this->recordDataInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->recordDataInfo) {
            $res['RecordDataInfo'] = [];
            if (null !== $this->recordDataInfo && \is_array($this->recordDataInfo)) {
                $n = 0;
                foreach ($this->recordDataInfo as $item) {
                    $res['RecordDataInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return recordDataInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RecordDataInfo'])) {
            if (!empty($map['RecordDataInfo'])) {
                $model->recordDataInfo = [];
                $n                     = 0;
                foreach ($map['RecordDataInfo'] as $item) {
                    $model->recordDataInfo[$n++] = null !== $item ? recordDataInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
