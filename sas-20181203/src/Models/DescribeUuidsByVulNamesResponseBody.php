<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUuidsByVulNamesResponseBody\machineInfoStatistics;

class DescribeUuidsByVulNamesResponseBody extends Model
{
    /**
     * @var machineInfoStatistics[]
     */
    public $machineInfoStatistics;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $vulCount;
    protected $_name = [
        'machineInfoStatistics' => 'MachineInfoStatistics',
        'requestId' => 'RequestId',
        'vulCount' => 'VulCount',
    ];

    public function validate()
    {
        if (\is_array($this->machineInfoStatistics)) {
            Model::validateArray($this->machineInfoStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineInfoStatistics) {
            if (\is_array($this->machineInfoStatistics)) {
                $res['MachineInfoStatistics'] = [];
                $n1 = 0;
                foreach ($this->machineInfoStatistics as $item1) {
                    $res['MachineInfoStatistics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->vulCount) {
            $res['VulCount'] = $this->vulCount;
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
        if (isset($map['MachineInfoStatistics'])) {
            if (!empty($map['MachineInfoStatistics'])) {
                $model->machineInfoStatistics = [];
                $n1 = 0;
                foreach ($map['MachineInfoStatistics'] as $item1) {
                    $model->machineInfoStatistics[$n1] = machineInfoStatistics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['VulCount'])) {
            $model->vulCount = $map['VulCount'];
        }

        return $model;
    }
}
