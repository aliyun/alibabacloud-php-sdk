<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180129\Models\QueryFailReasonForDomainRealNameVerificationResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 2017-03-17 11:08:02
     *
     * @var string
     */
    public $date;

    /**
     * @example SUCCEED
     *
     * @var string
     */
    public $domainNameVerificationStatus;

    /**
     * @var string
     */
    public $failReason;
    protected $_name = [
        'date'                         => 'Date',
        'domainNameVerificationStatus' => 'DomainNameVerificationStatus',
        'failReason'                   => 'FailReason',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->date) {
            $res['Date'] = $this->date;
        }
        if (null !== $this->domainNameVerificationStatus) {
            $res['DomainNameVerificationStatus'] = $this->domainNameVerificationStatus;
        }
        if (null !== $this->failReason) {
            $res['FailReason'] = $this->failReason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Date'])) {
            $model->date = $map['Date'];
        }
        if (isset($map['DomainNameVerificationStatus'])) {
            $model->domainNameVerificationStatus = $map['DomainNameVerificationStatus'];
        }
        if (isset($map['FailReason'])) {
            $model->failReason = $map['FailReason'];
        }

        return $model;
    }
}
