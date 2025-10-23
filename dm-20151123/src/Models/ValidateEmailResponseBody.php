<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Dara\Model;

class ValidateEmailResponseBody extends Model
{
    /**
     * @var string
     */
    public $domainPart;

    /**
     * @var bool
     */
    public $isFreeMail;

    /**
     * @var string
     */
    public $localPart;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $subStatus;
    protected $_name = [
        'domainPart' => 'DomainPart',
        'isFreeMail' => 'IsFreeMail',
        'localPart' => 'LocalPart',
        'provider' => 'Provider',
        'requestId' => 'RequestId',
        'status' => 'Status',
        'subStatus' => 'SubStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->domainPart) {
            $res['DomainPart'] = $this->domainPart;
        }

        if (null !== $this->isFreeMail) {
            $res['IsFreeMail'] = $this->isFreeMail;
        }

        if (null !== $this->localPart) {
            $res['LocalPart'] = $this->localPart;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->subStatus) {
            $res['SubStatus'] = $this->subStatus;
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
        if (isset($map['DomainPart'])) {
            $model->domainPart = $map['DomainPart'];
        }

        if (isset($map['IsFreeMail'])) {
            $model->isFreeMail = $map['IsFreeMail'];
        }

        if (isset($map['LocalPart'])) {
            $model->localPart = $map['LocalPart'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['SubStatus'])) {
            $model->subStatus = $map['SubStatus'];
        }

        return $model;
    }
}
