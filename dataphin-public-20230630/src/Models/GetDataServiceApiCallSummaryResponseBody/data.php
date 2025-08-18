<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallSummaryResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $callCount;

    /**
     * @var int
     */
    public $errorApiCount;

    /**
     * @var int
     */
    public $errorAppCount;

    /**
     * @var int
     */
    public $errorCount;

    /**
     * @var float
     */
    public $errorRate;

    /**
     * @var float
     */
    public $offlineRate;
    protected $_name = [
        'callCount' => 'CallCount',
        'errorApiCount' => 'ErrorApiCount',
        'errorAppCount' => 'ErrorAppCount',
        'errorCount' => 'ErrorCount',
        'errorRate' => 'ErrorRate',
        'offlineRate' => 'OfflineRate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callCount) {
            $res['CallCount'] = $this->callCount;
        }

        if (null !== $this->errorApiCount) {
            $res['ErrorApiCount'] = $this->errorApiCount;
        }

        if (null !== $this->errorAppCount) {
            $res['ErrorAppCount'] = $this->errorAppCount;
        }

        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }

        if (null !== $this->errorRate) {
            $res['ErrorRate'] = $this->errorRate;
        }

        if (null !== $this->offlineRate) {
            $res['OfflineRate'] = $this->offlineRate;
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
        if (isset($map['CallCount'])) {
            $model->callCount = $map['CallCount'];
        }

        if (isset($map['ErrorApiCount'])) {
            $model->errorApiCount = $map['ErrorApiCount'];
        }

        if (isset($map['ErrorAppCount'])) {
            $model->errorAppCount = $map['ErrorAppCount'];
        }

        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }

        if (isset($map['ErrorRate'])) {
            $model->errorRate = $map['ErrorRate'];
        }

        if (isset($map['OfflineRate'])) {
            $model->offlineRate = $map['OfflineRate'];
        }

        return $model;
    }
}
