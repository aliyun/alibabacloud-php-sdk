<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;

class AddDomainBackupResponseBody extends Model
{
    /**
     * @var string
     */
    public $domainName;
    /**
     * @var string
     */
    public $periodType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
