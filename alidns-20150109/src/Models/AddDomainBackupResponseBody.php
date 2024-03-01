<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddDomainBackupResponseBody extends Model
{
    /**
     * @description The domain name.
     *
     * @example test.aliyun.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The backup cycle.
     *
     * @example DAY
     *
     * @var string
     */
    public $periodType;

    /**
     * @description The request ID.
     *
     * @example FD552816-FCC8-4832-B4A2-2DA0C2BA1688
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainName' => 'DomainName',
        'periodType' => 'PeriodType',
        'requestId'  => 'RequestId',
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
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddDomainBackupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
