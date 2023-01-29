<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotLinksResponseBody;

use AlibabaCloud\SDK\DBFS\V20200418\Models\ListSnapshotLinksResponseBody\snapshotLinks\ecsList;
use AlibabaCloud\Tea\Model;

class snapshotLinks extends Model
{
    /**
     * @var ecsList[]
     */
    public $ecsList;

    /**
     * @example dbfs-q7qsgyqptjk******
     *
     * @var string
     */
    public $fsId;

    /**
     * @example test
     *
     * @var string
     */
    public $fsName;

    /**
     * @example sl-b3zlgraysgcs9jy*******
     *
     * @var string
     */
    public $linkId;

    /**
     * @example 1
     *
     * @var int
     */
    public $snapshotCount;

    /**
     * @example 20
     *
     * @var int
     */
    public $sourceSize;

    /**
     * @example attached
     *
     * @var string
     */
    public $status;

    /**
     * @example 50331648
     *
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'ecsList'       => 'EcsList',
        'fsId'          => 'FsId',
        'fsName'        => 'FsName',
        'linkId'        => 'LinkId',
        'snapshotCount' => 'SnapshotCount',
        'sourceSize'    => 'SourceSize',
        'status'        => 'Status',
        'totalSize'     => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsList) {
            $res['EcsList'] = [];
            if (null !== $this->ecsList && \is_array($this->ecsList)) {
                $n = 0;
                foreach ($this->ecsList as $item) {
                    $res['EcsList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fsId) {
            $res['FsId'] = $this->fsId;
        }
        if (null !== $this->fsName) {
            $res['FsName'] = $this->fsName;
        }
        if (null !== $this->linkId) {
            $res['LinkId'] = $this->linkId;
        }
        if (null !== $this->snapshotCount) {
            $res['SnapshotCount'] = $this->snapshotCount;
        }
        if (null !== $this->sourceSize) {
            $res['SourceSize'] = $this->sourceSize;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshotLinks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsList'])) {
            if (!empty($map['EcsList'])) {
                $model->ecsList = [];
                $n              = 0;
                foreach ($map['EcsList'] as $item) {
                    $model->ecsList[$n++] = null !== $item ? ecsList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FsId'])) {
            $model->fsId = $map['FsId'];
        }
        if (isset($map['FsName'])) {
            $model->fsName = $map['FsName'];
        }
        if (isset($map['LinkId'])) {
            $model->linkId = $map['LinkId'];
        }
        if (isset($map['SnapshotCount'])) {
            $model->snapshotCount = $map['SnapshotCount'];
        }
        if (isset($map['SourceSize'])) {
            $model->sourceSize = $map['SourceSize'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
