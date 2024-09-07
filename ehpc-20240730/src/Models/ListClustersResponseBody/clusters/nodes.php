<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models\ListClustersResponseBody\clusters;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example 0
     *
     * @var int
     */
    public $abnormalCounts;

    /**
     * @example 0
     *
     * @var int
     */
    public $creatingCounts;

    /**
     * @example 1
     *
     * @var int
     */
    public $runningCounts;
    protected $_name = [
        'abnormalCounts' => 'AbnormalCounts',
        'creatingCounts' => 'CreatingCounts',
        'runningCounts'  => 'RunningCounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->abnormalCounts) {
            $res['AbnormalCounts'] = $this->abnormalCounts;
        }
        if (null !== $this->creatingCounts) {
            $res['CreatingCounts'] = $this->creatingCounts;
        }
        if (null !== $this->runningCounts) {
            $res['RunningCounts'] = $this->runningCounts;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AbnormalCounts'])) {
            $model->abnormalCounts = $map['AbnormalCounts'];
        }
        if (isset($map['CreatingCounts'])) {
            $model->creatingCounts = $map['CreatingCounts'];
        }
        if (isset($map['RunningCounts'])) {
            $model->runningCounts = $map['RunningCounts'];
        }

        return $model;
    }
}
