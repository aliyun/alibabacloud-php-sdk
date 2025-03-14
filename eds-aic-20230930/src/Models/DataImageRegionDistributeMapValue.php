<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\Tea\Model;

class DataImageRegionDistributeMapValue extends Model
{
    /**
     * @description The status of the image distribution task.
     *
     * Valid values:
     *
     *   AVAILABLE: The task is ready.
     *   DELETE: The task is deleted.
     *   INIT: The task is being initialized.
     *   CREATE_FAILED: The task failed to be created.
     *   CREATING: The task is being created.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $distributeStatus;

    /**
     * @description The distribution progress of the image.
     *
     * @example 100%
     *
     * @var string
     */
    public $progress;
    protected $_name = [
        'distributeStatus' => 'DistributeStatus',
        'progress' => 'Progress',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributeStatus) {
            $res['DistributeStatus'] = $this->distributeStatus;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataImageRegionDistributeMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributeStatus'])) {
            $model->distributeStatus = $map['DistributeStatus'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }

        return $model;
    }
}
