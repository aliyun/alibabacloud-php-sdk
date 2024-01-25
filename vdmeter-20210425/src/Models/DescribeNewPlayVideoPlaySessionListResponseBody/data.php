<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vdmeter\V20210425\Models\DescribeNewPlayVideoPlaySessionListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $traceId;

    /**
     * @var string
     */
    public $UUID;

    /**
     * @var string
     */
    public $VPS;
    protected $_name = [
        'gmtModifiedTime' => 'GmtModifiedTime',
        'status'          => 'Status',
        'traceId'         => 'TraceId',
        'UUID'            => 'UUID',
        'VPS'             => 'VPS',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->traceId) {
            $res['TraceId'] = $this->traceId;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }
        if (null !== $this->VPS) {
            $res['VPS'] = $this->VPS;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TraceId'])) {
            $model->traceId = $map['TraceId'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }
        if (isset($map['VPS'])) {
            $model->VPS = $map['VPS'];
        }

        return $model;
    }
}
