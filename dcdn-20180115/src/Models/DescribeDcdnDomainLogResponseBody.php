<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainLogResponseBody\domainLogDetails;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainLogResponseBody extends Model
{
    /**
     * @var domainLogDetails
     */
    public $domainLogDetails;

    /**
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example 95594003-CAC5-5636-AF72-2A094364****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainLogDetails' => 'DomainLogDetails',
        'domainName'       => 'DomainName',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainLogDetails) {
            $res['DomainLogDetails'] = null !== $this->domainLogDetails ? $this->domainLogDetails->toMap() : null;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnDomainLogResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainLogDetails'])) {
            $model->domainLogDetails = domainLogDetails::fromMap($map['DomainLogDetails']);
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
