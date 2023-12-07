<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class CheckCdnDomainExistResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 64D28B53-5902-409B-94F6-FD46680144FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The status of the domain name. Valid values:
     *
     *   **DomainNotExist**: The domain name is not added.
     *   **DomainExistOtherUser**: The domain name has been added by another account.
     *   **DomainExistCdnProduct**: The domain name has been added to Alibaba Cloud CDN.
     *   **DomainExistDcdnProduct**: The domain name has been added to Dynamic Content Delivery Network (DCDN).
     *   **DomainExistScdnProduct**: The domain name has been added to Secure CDN (SCDN).
     *   **DomainExistVodProduct**: The domain name has been added to ApsaraVideo VOD.
     *   **DomainExistLiveProduct**: The domain name has been added to ApsaraVideo Live.
     *   **DomainExistDcdnipaProduct**: The domain name has been added to DCDN IP Application Accelerator (IPA).
     *
     * @example DomainNotExist
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'requestId' => 'RequestId',
        'status'    => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
     * @return CheckCdnDomainExistResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
