<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Domain\V20180208\Models\QueryDomainTransferStatusResponseBody\domainTransferStatus;

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
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->domainTransferStatus)) {
            Model::validateArray($this->domainTransferStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainTransferStatus) {
            if (\is_array($this->domainTransferStatus)) {
                $res['DomainTransferStatus'] = [];
                $n1 = 0;
                foreach ($this->domainTransferStatus as $item1) {
                    $res['DomainTransferStatus'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['DomainTransferStatus'])) {
            if (!empty($map['DomainTransferStatus'])) {
                $model->domainTransferStatus = [];
                $n1 = 0;
                foreach ($map['DomainTransferStatus'] as $item1) {
                    $model->domainTransferStatus[$n1++] = domainTransferStatus::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
