<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Tea\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example product_info
     *
     * @var string
     */
    public $indices;

    /**
     * @description This parameter is required.
     *
     * @example qingning
     *
     * @var string
     */
    public $snapshot;

    /**
     * @example false
     *
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'indices'  => 'indices',
        'snapshot' => 'snapshot',
        'dryRun'   => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indices) {
            $res['indices'] = $this->indices;
        }
        if (null !== $this->snapshot) {
            $res['snapshot'] = $this->snapshot;
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['indices'])) {
            $model->indices = $map['indices'];
        }
        if (isset($map['snapshot'])) {
            $model->snapshot = $map['snapshot'];
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
