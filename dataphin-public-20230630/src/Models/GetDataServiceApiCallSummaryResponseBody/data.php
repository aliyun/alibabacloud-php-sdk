<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiCallSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1021
     *
     * @var int
     */
    public $callCount;

    /**
     * @example 8
     *
     * @var int
     */
    public $errorApiCount;

    /**
     * @example 2
     *
     * @var int
     */
    public $errorAppCount;

    /**
     * @example 102
     *
     * @var int
     */
    public $errorCount;

    /**
     * @example 10.01
     *
     * @var float
     */
    public $errorRate;

    /**
     * @example 2.03
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
