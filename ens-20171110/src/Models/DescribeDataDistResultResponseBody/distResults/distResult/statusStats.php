<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeDataDistResultResponseBody\distResults\distResult\statusStats\statusStat;

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
        if (\is_array($this->statusStat)) {
            Model::validateArray($this->statusStat);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->statusStat) {
            if (\is_array($this->statusStat)) {
                $res['StatusStat'] = [];
                $n1 = 0;
                foreach ($this->statusStat as $item1) {
                    $res['StatusStat'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['StatusStat'])) {
            if (!empty($map['StatusStat'])) {
                $model->statusStat = [];
                $n1 = 0;
                foreach ($map['StatusStat'] as $item1) {
                    $model->statusStat[$n1] = statusStat::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
