<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeDomainSecureSuggestsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $riskSuggest;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $vulSuggest;

    /**
     * @var string
     */
    public $webLockSuggest;
    protected $_name = [
        'requestId' => 'RequestId',
        'riskSuggest' => 'RiskSuggest',
        'totalCount' => 'TotalCount',
        'vulSuggest' => 'VulSuggest',
        'webLockSuggest' => 'WebLockSuggest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->riskSuggest) {
            $res['RiskSuggest'] = $this->riskSuggest;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->vulSuggest) {
            $res['VulSuggest'] = $this->vulSuggest;
        }

        if (null !== $this->webLockSuggest) {
            $res['WebLockSuggest'] = $this->webLockSuggest;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RiskSuggest'])) {
            $model->riskSuggest = $map['RiskSuggest'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['VulSuggest'])) {
            $model->vulSuggest = $map['VulSuggest'];
        }

        if (isset($map['WebLockSuggest'])) {
            $model->webLockSuggest = $map['WebLockSuggest'];
        }

        return $model;
    }
}
