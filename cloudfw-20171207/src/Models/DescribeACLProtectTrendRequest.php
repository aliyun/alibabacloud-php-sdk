<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Tea\Model;

class DescribeACLProtectTrendRequest extends Model
{
    /**
     * @description The end of the time range to query. The value is a UNIX timestamp that is accurate to seconds.
     *
     * @example 1670397599
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The language of the content within the request and the response. Valid values:
     *
     *   **zh** (default): Chinese
     *   **en**: English
     *
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @description This parameter is deprecated.
     *
     * @example 223.95.87.130
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The beginning of the time range to query. The value is a UNIX timestamp that is accurate to seconds.
     *
     * @example 1677050306
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime' => 'EndTime',
        'lang' => 'Lang',
        'sourceIp' => 'SourceIp',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeACLProtectTrendRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
