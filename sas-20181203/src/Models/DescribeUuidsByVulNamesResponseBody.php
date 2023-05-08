<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeUuidsByVulNamesResponseBody\machineInfoStatistics;
use AlibabaCloud\Tea\Model;

class DescribeUuidsByVulNamesResponseBody extends Model
{
    /**
     * @description An array that consists of the statistics about the assets.
     *
     * @var machineInfoStatistics[]
     */
    public $machineInfoStatistics;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 97286A-4A6B-4A4-95FA-EC7E3E2451
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'machineInfoStatistics' => 'MachineInfoStatistics',
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineInfoStatistics) {
            $res['MachineInfoStatistics'] = [];
            if (null !== $this->machineInfoStatistics && \is_array($this->machineInfoStatistics)) {
                $n = 0;
                foreach ($this->machineInfoStatistics as $item) {
                    $res['MachineInfoStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['MachineInfoStatistics'])) {
            if (!empty($map['MachineInfoStatistics'])) {
                $model->machineInfoStatistics = [];
                $n                            = 0;
                foreach ($map['MachineInfoStatistics'] as $item) {
                    $model->machineInfoStatistics[$n++] = null !== $item ? machineInfoStatistics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
