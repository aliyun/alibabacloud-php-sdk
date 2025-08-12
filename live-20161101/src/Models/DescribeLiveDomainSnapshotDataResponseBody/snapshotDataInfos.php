<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainSnapshotDataResponseBody\snapshotDataInfos\snapshotDataInfo;

class snapshotDataInfos extends Model
{
    /**
     * @var snapshotDataInfo[]
     */
    public $snapshotDataInfo;
    protected $_name = [
        'snapshotDataInfo' => 'SnapshotDataInfo',
    ];

    public function validate()
    {
        if (\is_array($this->snapshotDataInfo)) {
            Model::validateArray($this->snapshotDataInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snapshotDataInfo) {
            if (\is_array($this->snapshotDataInfo)) {
                $res['SnapshotDataInfo'] = [];
                $n1 = 0;
                foreach ($this->snapshotDataInfo as $item1) {
                    $res['SnapshotDataInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SnapshotDataInfo'])) {
            if (!empty($map['SnapshotDataInfo'])) {
                $model->snapshotDataInfo = [];
                $n1 = 0;
                foreach ($map['SnapshotDataInfo'] as $item1) {
                    $model->snapshotDataInfo[$n1] = snapshotDataInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
