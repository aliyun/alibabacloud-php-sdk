<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUuidsByVulNamesResponseBody\machineInfoStatistics;
use AlibabaCloud\Tea\Model;

class DescribeUuidsByVulNamesResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var machineInfoStatistics[]
     */
    public $machineInfoStatistics;
    protected $_name = [
        'requestId'             => 'RequestId',
        'machineInfoStatistics' => 'MachineInfoStatistics',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->machineInfoStatistics) {
            $res['MachineInfoStatistics'] = [];
            if (null !== $this->machineInfoStatistics && \is_array($this->machineInfoStatistics)) {
                $n = 0;
                foreach ($this->machineInfoStatistics as $item) {
                    $res['MachineInfoStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUuidsByVulNamesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['MachineInfoStatistics'])) {
            if (!empty($map['MachineInfoStatistics'])) {
                $model->machineInfoStatistics = [];
                $n                            = 0;
                foreach ($map['MachineInfoStatistics'] as $item) {
                    $model->machineInfoStatistics[$n++] = null !== $item ? machineInfoStatistics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
