<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\SDK\Domain\V20180208\Models\QueryDomainTransferStatusResponseBody\domainTransferStatus;
use AlibabaCloud\Tea\Model;

class QueryDomainTransferStatusResponseBody extends Model
{
    /**
     * @var domainTransferStatus[]
     */
    public $domainTransferStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainTransferStatus' => 'DomainTransferStatus',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainTransferStatus) {
            $res['DomainTransferStatus'] = [];
            if (null !== $this->domainTransferStatus && \is_array($this->domainTransferStatus)) {
                $n = 0;
                foreach ($this->domainTransferStatus as $item) {
                    $res['DomainTransferStatus'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryDomainTransferStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainTransferStatus'])) {
            if (!empty($map['DomainTransferStatus'])) {
                $model->domainTransferStatus = [];
                $n                           = 0;
                foreach ($map['DomainTransferStatus'] as $item) {
                    $model->domainTransferStatus[$n++] = null !== $item ? domainTransferStatus::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
