<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandTaskRequest\rdsSuperInstances;
use AlibabaCloud\SDK\Drds\V20190123\Models\SubmitSmoothExpandTaskRequest\transferTaskInfos;
use AlibabaCloud\Tea\Model;

class SubmitSmoothExpandTaskRequest extends Model
{
    /**
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @var string
     */
    public $dbName;

    /**
     * @var bool
     */
    public $dbInstanceIsCreating;

    /**
     * @var transferTaskInfos[]
     */
    public $transferTaskInfos;

    /**
     * @var rdsSuperInstances[]
     */
    public $rdsSuperInstances;
    protected $_name = [
        'drdsInstanceId'       => 'DrdsInstanceId',
        'dbName'               => 'DbName',
        'dbInstanceIsCreating' => 'DbInstanceIsCreating',
        'transferTaskInfos'    => 'TransferTaskInfos',
        'rdsSuperInstances'    => 'RdsSuperInstances',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->dbInstanceIsCreating) {
            $res['DbInstanceIsCreating'] = $this->dbInstanceIsCreating;
        }
        if (null !== $this->transferTaskInfos) {
            $res['TransferTaskInfos'] = [];
            if (null !== $this->transferTaskInfos && \is_array($this->transferTaskInfos)) {
                $n = 0;
                foreach ($this->transferTaskInfos as $item) {
                    $res['TransferTaskInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->rdsSuperInstances) {
            $res['RdsSuperInstances'] = [];
            if (null !== $this->rdsSuperInstances && \is_array($this->rdsSuperInstances)) {
                $n = 0;
                foreach ($this->rdsSuperInstances as $item) {
                    $res['RdsSuperInstances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitSmoothExpandTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['DbInstanceIsCreating'])) {
            $model->dbInstanceIsCreating = $map['DbInstanceIsCreating'];
        }
        if (isset($map['TransferTaskInfos'])) {
            if (!empty($map['TransferTaskInfos'])) {
                $model->transferTaskInfos = [];
                $n                        = 0;
                foreach ($map['TransferTaskInfos'] as $item) {
                    $model->transferTaskInfos[$n++] = null !== $item ? transferTaskInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RdsSuperInstances'])) {
            if (!empty($map['RdsSuperInstances'])) {
                $model->rdsSuperInstances = [];
                $n                        = 0;
                foreach ($map['RdsSuperInstances'] as $item) {
                    $model->rdsSuperInstances[$n++] = null !== $item ? rdsSuperInstances::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
