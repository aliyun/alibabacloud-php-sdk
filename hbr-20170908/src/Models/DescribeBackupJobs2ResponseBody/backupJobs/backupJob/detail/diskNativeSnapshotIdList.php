<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupJobs2ResponseBody\backupJobs\backupJob\detail;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->diskNativeSnapshotId) {
            $res['DiskNativeSnapshotId'] = $this->diskNativeSnapshotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return diskNativeSnapshotIdList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DiskNativeSnapshotId'])) {
            if (!empty($map['DiskNativeSnapshotId'])) {
                $model->diskNativeSnapshotId = $map['DiskNativeSnapshotId'];
            }
        }

        return $model;
    }
}
