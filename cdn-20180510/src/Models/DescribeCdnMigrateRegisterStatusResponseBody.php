<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnMigrateRegisterStatusResponseBody extends Model
{
    /**
     * @description The accelerated domain name.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The ID of the region.
     *
     * @example 64D28B53-5902-409B-94F6-FD46680144FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The registration status. Valid values:
     *
     *   **not exist**
     *   **running**
     *   **succeed**
     *   **failed**
     *
     * @example succeed
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'domainName' => 'DomainName',
        'requestId'  => 'RequestId',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnMigrateRegisterStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
