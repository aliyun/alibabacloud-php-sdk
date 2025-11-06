<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Amqp\V20190901\Models\GetStatisticsByVhostResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Amqp\V20190901\Models\GetStatisticsByVhostResponseBody\data\connectionStatistics;

class data extends Model
{
    /**
     * @var connectionStatistics[]
     */
    public $connectionStatistics;
    protected $_name = [
        'connectionStatistics' => 'ConnectionStatistics',
    ];

    public function validate()
    {
        if (\is_array($this->connectionStatistics)) {
            Model::validateArray($this->connectionStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionStatistics) {
            if (\is_array($this->connectionStatistics)) {
                $res['ConnectionStatistics'] = [];
                $n1 = 0;
                foreach ($this->connectionStatistics as $item1) {
                    $res['ConnectionStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ConnectionStatistics'])) {
            if (!empty($map['ConnectionStatistics'])) {
                $model->connectionStatistics = [];
                $n1 = 0;
                foreach ($map['ConnectionStatistics'] as $item1) {
                    $model->connectionStatistics[$n1] = connectionStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
