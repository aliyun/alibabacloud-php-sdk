<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\GetDbfsResponseBody\DBFSInfo;

use AlibabaCloud\Tea\Model;

class snapshotInfo extends Model
{
    /**
     * @var string
     */
    public $linkId;

    /**
     * @var string
     */
    public $policyId;

    /**
     * @var int
     */
    public $snapshotCount;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'linkId'        => 'LinkId',
        'policyId'      => 'PolicyId',
        'snapshotCount' => 'SnapshotCount',
        'totalSize'     => 'totalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->linkId) {
            $res['LinkId'] = $this->linkId;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->snapshotCount) {
            $res['SnapshotCount'] = $this->snapshotCount;
        }
        if (null !== $this->totalSize) {
            $res['totalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LinkId'])) {
            $model->linkId = $map['LinkId'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['SnapshotCount'])) {
            $model->snapshotCount = $map['SnapshotCount'];
        }
        if (isset($map['totalSize'])) {
            $model->totalSize = $map['totalSize'];
        }

        return $model;
    }
}
