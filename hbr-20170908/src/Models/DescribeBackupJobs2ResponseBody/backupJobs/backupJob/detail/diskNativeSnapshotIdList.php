<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob\detail;

use AlibabaCloud\Dara\Model;

class diskNativeSnapshotIdList extends Model
{
    /**
     * @var string[]
     */
    public $diskNativeSnapshotId;
    protected $_name = [
        'diskNativeSnapshotId' => 'DiskNativeSnapshotId',
    ];

    public function validate()
    {
        if (\is_array($this->diskNativeSnapshotId)) {
            Model::validateArray($this->diskNativeSnapshotId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->diskNativeSnapshotId) {
            if (\is_array($this->diskNativeSnapshotId)) {
                $res['DiskNativeSnapshotId'] = [];
                $n1 = 0;
                foreach ($this->diskNativeSnapshotId as $item1) {
                    $res['DiskNativeSnapshotId'][$n1] = $item1;
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
        if (isset($map['DiskNativeSnapshotId'])) {
            if (!empty($map['DiskNativeSnapshotId'])) {
                $model->diskNativeSnapshotId = [];
                $n1 = 0;
                foreach ($map['DiskNativeSnapshotId'] as $item1) {
                    $model->diskNativeSnapshotId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
