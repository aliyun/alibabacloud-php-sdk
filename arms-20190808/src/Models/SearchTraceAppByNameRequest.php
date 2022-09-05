<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class SearchTraceAppByNameRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $traceAppName;
    protected $_name = [
        'regionId'     => 'RegionId',
        'traceAppName' => 'TraceAppName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->traceAppName) {
            $res['TraceAppName'] = $this->traceAppName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SearchTraceAppByNameRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TraceAppName'])) {
            $model->traceAppName = $map['TraceAppName'];
        }

        return $model;
    }
}
