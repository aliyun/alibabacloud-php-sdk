<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties;

use AlibabaCloud\SDK\MaxCompute\V20220104\Models\GetProjectResponseBody\data\properties\storageTierInfo\storageTierSize;
use AlibabaCloud\Tea\Model;

class storageTierInfo extends Model
{
    /**
     * @description The backup storage.
     *
     * @example 86672917
     *
     * @var int
     */
    public $projectBackupSize;

    /**
     * @description The total storage.
     *
     * @example 56066037
     *
     * @var int
     */
    public $projectTotalSize;

    /**
     * @description The tiered storage.
     *
     * @var storageTierSize
     */
    public $storageTierSize;
    protected $_name = [
        'projectBackupSize' => 'projectBackupSize',
        'projectTotalSize'  => 'projectTotalSize',
        'storageTierSize'   => 'storageTierSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectBackupSize) {
            $res['projectBackupSize'] = $this->projectBackupSize;
        }
        if (null !== $this->projectTotalSize) {
            $res['projectTotalSize'] = $this->projectTotalSize;
        }
        if (null !== $this->storageTierSize) {
            $res['storageTierSize'] = null !== $this->storageTierSize ? $this->storageTierSize->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return storageTierInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectBackupSize'])) {
            $model->projectBackupSize = $map['projectBackupSize'];
        }
        if (isset($map['projectTotalSize'])) {
            $model->projectTotalSize = $map['projectTotalSize'];
        }
        if (isset($map['storageTierSize'])) {
            $model->storageTierSize = storageTierSize::fromMap($map['storageTierSize']);
        }

        return $model;
    }
}
