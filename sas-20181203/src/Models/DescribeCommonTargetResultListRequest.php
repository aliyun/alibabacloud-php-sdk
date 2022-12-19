<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeCommonTargetResultListRequest extends Model
{
    /**
     * @description The source IP address of the request.
     *
     * @example 113.57.XX.XX
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The type of the configuration item. Valid values:
     *
     *   **webshell_timescan**: webshell detection and removal
     *   **aliscriptengine**: in-depth detection engine
     *   **alidetect**: installation scope of local file detection
     *   **alidetect-scan-enable**: detection scope of local file detection
     *
     * @example webshell_timescan
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'sourceIp' => 'SourceIp',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCommonTargetResultListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
