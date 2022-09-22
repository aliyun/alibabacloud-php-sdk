<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaAuditResultDetailResponseBody\auditResultDetails;
use AlibabaCloud\Tea\Model;

class GetMediaAuditResultDetailResponseBody extends Model
{
    /**
     * @var auditResultDetails[]
     */
    public $auditResultDetails;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $total;
    protected $_name = [
        'auditResultDetails' => 'AuditResultDetails',
        'requestId'          => 'RequestId',
        'total'              => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditResultDetails) {
            $res['AuditResultDetails'] = [];
            if (null !== $this->auditResultDetails && \is_array($this->auditResultDetails)) {
                $n = 0;
                foreach ($this->auditResultDetails as $item) {
                    $res['AuditResultDetails'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaAuditResultDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditResultDetails'])) {
            if (!empty($map['AuditResultDetails'])) {
                $model->auditResultDetails = [];
                $n                         = 0;
                foreach ($map['AuditResultDetails'] as $item) {
                    $model->auditResultDetails[$n++] = null !== $item ? auditResultDetails::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
