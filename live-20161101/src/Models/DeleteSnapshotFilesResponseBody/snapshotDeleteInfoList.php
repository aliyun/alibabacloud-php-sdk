<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotFilesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Live\V20161101\Models\DeleteSnapshotFilesResponseBody\snapshotDeleteInfoList\snapshotDeleteInfo;

class snapshotDeleteInfoList extends Model
{
    /**
     * @var snapshotDeleteInfo[]
     */
    public $snapshotDeleteInfo;
    protected $_name = [
        'snapshotDeleteInfo' => 'SnapshotDeleteInfo',
    ];

    public function validate()
    {
        if (\is_array($this->snapshotDeleteInfo)) {
            Model::validateArray($this->snapshotDeleteInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->snapshotDeleteInfo) {
            if (\is_array($this->snapshotDeleteInfo)) {
                $res['SnapshotDeleteInfo'] = [];
                $n1 = 0;
                foreach ($this->snapshotDeleteInfo as $item1) {
                    $res['SnapshotDeleteInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['SnapshotDeleteInfo'])) {
            if (!empty($map['SnapshotDeleteInfo'])) {
                $model->snapshotDeleteInfo = [];
                $n1 = 0;
                foreach ($map['SnapshotDeleteInfo'] as $item1) {
                    $model->snapshotDeleteInfo[$n1] = snapshotDeleteInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
