<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Viapioxscross\V20200701\Models\LingJieOpenStatusDetail;

use AlibabaCloud\SDK\Viapioxscross\V20200701\Models\LingJieOpenStatusDetail\apiList\moreOperations;
use AlibabaCloud\Tea\Model;

class apiList extends Model
{
    /**
     * @var string
     */
    public $cnName;

    /**
     * @var string
     */
    public $concurrentLimit;

    /**
     * @var string
     */
    public $enName;

    /**
     * @var moreOperations[]
     */
    public $moreOperations;

    /**
     * @var string
     */
    public $statisticsUnit;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $usage;
    protected $_name = [
        'cnName'          => 'CnName',
        'concurrentLimit' => 'ConcurrentLimit',
        'enName'          => 'EnName',
        'moreOperations'  => 'MoreOperations',
        'statisticsUnit'  => 'StatisticsUnit',
        'status'          => 'Status',
        'usage'           => 'Usage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cnName) {
            $res['CnName'] = $this->cnName;
        }
        if (null !== $this->concurrentLimit) {
            $res['ConcurrentLimit'] = $this->concurrentLimit;
        }
        if (null !== $this->enName) {
            $res['EnName'] = $this->enName;
        }
        if (null !== $this->moreOperations) {
            $res['MoreOperations'] = [];
            if (null !== $this->moreOperations && \is_array($this->moreOperations)) {
                $n = 0;
                foreach ($this->moreOperations as $item) {
                    $res['MoreOperations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->statisticsUnit) {
            $res['StatisticsUnit'] = $this->statisticsUnit;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->usage) {
            $res['Usage'] = $this->usage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CnName'])) {
            $model->cnName = $map['CnName'];
        }
        if (isset($map['ConcurrentLimit'])) {
            $model->concurrentLimit = $map['ConcurrentLimit'];
        }
        if (isset($map['EnName'])) {
            $model->enName = $map['EnName'];
        }
        if (isset($map['MoreOperations'])) {
            if (!empty($map['MoreOperations'])) {
                $model->moreOperations = [];
                $n                     = 0;
                foreach ($map['MoreOperations'] as $item) {
                    $model->moreOperations[$n++] = null !== $item ? moreOperations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StatisticsUnit'])) {
            $model->statisticsUnit = $map['StatisticsUnit'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Usage'])) {
            $model->usage = $map['Usage'];
        }

        return $model;
    }
}
