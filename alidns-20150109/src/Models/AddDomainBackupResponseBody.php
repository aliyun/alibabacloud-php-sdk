<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class AddDomainBackupResponseBody extends Model
{
    /**
     * @var string
     */
    public $periodType;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $domainName;
    protected $_name = [
        'periodType' => 'PeriodType',
        'requestId'  => 'RequestId',
        'domainName' => 'DomainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->periodType) {
            $res['PeriodType'] = $this->periodType;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
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
        if (isset($map['PeriodType'])) {
            $model->periodType = $map['PeriodType'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }

        return $model;
    }
}
