<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Esserverless\V20230627\Models;

use AlibabaCloud\Dara\Model;

class CreateSnapshotRequest extends Model
{
    /**
     * @var string
     */
    public $indices;

    /**
     * @var string
     */
    public $snapshot;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'indices' => 'indices',
        'snapshot' => 'snapshot',
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
