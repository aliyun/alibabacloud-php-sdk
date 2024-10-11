<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsResponseBody\DBFSInfo;

use AlibabaCloud\Tea\Model;

class snapshotInfo extends Model
{
    /**
     * @example sl-b3zlgraysgcs9jy*******
     *
     * @var string
     */
    public $linkId;

    /**
     * @example sp-ehuhzlfetb2jiwz*******
     *
     * @var string
     */
    public $policyId;

    /**
     * @example 1
     *
     * @var int
     */
    public $snapshotCount;

    /**
     * @example 50331648
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'linkId'        => 'LinkId',
        'policyId'      => 'PolicyId',
        'snapshotCount' => 'SnapshotCount',
        'totalSize'     => 'TotalSize',
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
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
