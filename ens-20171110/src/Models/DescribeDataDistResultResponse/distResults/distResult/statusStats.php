<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse\distResults\distResult;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponse\distResults\distResult\statusStats\statusStat;
use AlibabaCloud\Tea\Model;

class statusStats extends Model
{
    /**
     * @var statusStat[]
     */
    public $statusStat;
    protected $_name = [
        'statusStat' => 'StatusStat',
    ];

    public function validate()
    {
        Model::validateRequired('statusStat', $this->statusStat, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->statusStat) {
            $res['StatusStat'] = [];
            if (null !== $this->statusStat && \is_array($this->statusStat)) {
                $n = 0;
                foreach ($this->statusStat as $item) {
                    $res['StatusStat'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return statusStats
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['StatusStat'])) {
            if (!empty($map['StatusStat'])) {
                $model->statusStat = [];
                $n                 = 0;
                foreach ($map['StatusStat'] as $item) {
                    $model->statusStat[$n++] = null !== $item ? statusStat::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
