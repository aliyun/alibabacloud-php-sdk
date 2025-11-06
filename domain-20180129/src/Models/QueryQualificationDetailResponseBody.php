<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180129\Models\QueryQualificationDetailResponseBody\credentials;

class QueryQualificationDetailResponseBody extends Model
{
    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var credentials
     */
    public $credentials;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $trackId;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'credentials' => 'Credentials',
        'requestId' => 'RequestId',
        'trackId' => 'TrackId',
    ];

    public function validate()
    {
        if (null !== $this->credentials) {
            $this->credentials->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->credentials) {
            $res['Credentials'] = null !== $this->credentials ? $this->credentials->toArray($noStream) : $this->credentials;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->trackId) {
            $res['TrackId'] = $this->trackId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
