<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200407\Models;

use AlibabaCloud\Dara\Model;

class GetInstanceSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $autoReissueCount;

    /**
     * @var int
     */
    public $certificateCount;

    /**
     * @var int
     */
    public $inactiveCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $willExpireCount;
    protected $_name = [
        'autoReissueCount' => 'AutoReissueCount',
        'certificateCount' => 'CertificateCount',
        'inactiveCount' => 'InactiveCount',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'willExpireCount' => 'WillExpireCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoReissueCount) {
            $res['AutoReissueCount'] = $this->autoReissueCount;
        }

        if (null !== $this->certificateCount) {
            $res['CertificateCount'] = $this->certificateCount;
        }

        if (null !== $this->inactiveCount) {
            $res['InactiveCount'] = $this->inactiveCount;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->willExpireCount) {
            $res['WillExpireCount'] = $this->willExpireCount;
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
        if (isset($map['AutoReissueCount'])) {
            $model->autoReissueCount = $map['AutoReissueCount'];
        }

        if (isset($map['CertificateCount'])) {
            $model->certificateCount = $map['CertificateCount'];
        }

        if (isset($map['InactiveCount'])) {
            $model->inactiveCount = $map['InactiveCount'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['WillExpireCount'])) {
            $model->willExpireCount = $map['WillExpireCount'];
        }

        return $model;
    }
}
