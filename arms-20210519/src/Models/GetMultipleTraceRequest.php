<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210519\Models;

use AlibabaCloud\Tea\Model;

class GetMultipleTraceRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string[]
     */
    public $traceIDs;
    protected $_name = [
        'regionId' => 'RegionId',
        'traceIDs' => 'TraceIDs',
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
        if (null !== $this->traceIDs) {
            $res['TraceIDs'] = $this->traceIDs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMultipleTraceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TraceIDs'])) {
            if (!empty($map['TraceIDs'])) {
                $model->traceIDs = $map['TraceIDs'];
            }
        }

        return $model;
    }
}
