<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeVulDefendCountStatisticsRequest extends Model
{
    /**
     * @description The type of the vulnerabilities. Valid values:
     *
     *   app: application vulnerabilities
     *   emg: urgent vulnerabilities
     *
     * @example emg
     *
     * @var string
     */
    public $vulType;
    protected $_name = [
        'vulType' => 'VulType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->vulType) {
            $res['VulType'] = $this->vulType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVulDefendCountStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VulType'])) {
            $model->vulType = $map['VulType'];
        }

        return $model;
    }
}
