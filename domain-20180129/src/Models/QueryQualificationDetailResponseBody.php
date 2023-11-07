<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponseBody\credentials;
use AlibabaCloud\Tea\Model;

class QueryQualificationDetailResponseBody extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $auditStatus;

    /**
     * @var credentials
     */
    public $credentials;

    /**
     * @example 9DFCF6F8-243C-****-8035-4B12FEFD7D48
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 943a1662898a****0acbdbeca91
     *
     * @var string
     */
    public $trackId;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'credentials' => 'Credentials',
        'requestId'   => 'RequestId',
        'trackId'     => 'TrackId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }
        if (null !== $this->credentials) {
            $res['Credentials'] = null !== $this->credentials ? $this->credentials->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->trackId) {
            $res['TrackId'] = $this->trackId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryQualificationDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }
        if (isset($map['Credentials'])) {
            $model->credentials = credentials::fromMap($map['Credentials']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TrackId'])) {
            $model->trackId = $map['TrackId'];
        }

        return $model;
    }
}
