<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeMetricListRequest;

use AlibabaCloud\Dara\Model;

class processInfos extends Model
{
    /**
     * @var int[]
     */
    public $processIds;

    /**
     * @var string
     */
    public $processName;
    protected $_name = [
        'processIds' => 'ProcessIds',
        'processName' => 'ProcessName',
    ];

    public function validate()
    {
        if (\is_array($this->processIds)) {
            Model::validateArray($this->processIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->processIds) {
            if (\is_array($this->processIds)) {
                $res['ProcessIds'] = [];
                $n1 = 0;
                foreach ($this->processIds as $item1) {
                    $res['ProcessIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->processName) {
            $res['ProcessName'] = $this->processName;
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
        if (isset($map['ProcessIds'])) {
            if (!empty($map['ProcessIds'])) {
                $model->processIds = [];
                $n1 = 0;
                foreach ($map['ProcessIds'] as $item1) {
                    $model->processIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProcessName'])) {
            $model->processName = $map['ProcessName'];
        }

        return $model;
    }
}
