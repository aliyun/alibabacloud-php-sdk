<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\ListFeatureConsistencyCheckJobFeatureReportsResponseBody;

use AlibabaCloud\Tea\Model;

class reportsOfFeatureDiff extends Model
{
    /**
     * @example gender
     *
     * @var string
     */
    public $featureName;

    /**
     * @example 9010
     *
     * @var string
     */
    public $logItemId;

    /**
     * @example F7AC05FF-EDE7-5C2B-B9AE-33D6DF4178BA
     *
     * @var string
     */
    public $logRequestId;

    /**
     * @example 1010
     *
     * @var string
     */
    public $logUserId;

    /**
     * @example male
     *
     * @var string
     */
    public $offlineValue;

    /**
     * @example male
     *
     * @var string
     */
    public $onlineValue;
    protected $_name = [
        'featureName'  => 'FeatureName',
        'logItemId'    => 'LogItemId',
        'logRequestId' => 'LogRequestId',
        'logUserId'    => 'LogUserId',
        'offlineValue' => 'OfflineValue',
        'onlineValue'  => 'OnlineValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureName) {
            $res['FeatureName'] = $this->featureName;
        }
        if (null !== $this->logItemId) {
            $res['LogItemId'] = $this->logItemId;
        }
        if (null !== $this->logRequestId) {
            $res['LogRequestId'] = $this->logRequestId;
        }
        if (null !== $this->logUserId) {
            $res['LogUserId'] = $this->logUserId;
        }
        if (null !== $this->offlineValue) {
            $res['OfflineValue'] = $this->offlineValue;
        }
        if (null !== $this->onlineValue) {
            $res['OnlineValue'] = $this->onlineValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reportsOfFeatureDiff
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureName'])) {
            $model->featureName = $map['FeatureName'];
        }
        if (isset($map['LogItemId'])) {
            $model->logItemId = $map['LogItemId'];
        }
        if (isset($map['LogRequestId'])) {
            $model->logRequestId = $map['LogRequestId'];
        }
        if (isset($map['LogUserId'])) {
            $model->logUserId = $map['LogUserId'];
        }
        if (isset($map['OfflineValue'])) {
            $model->offlineValue = $map['OfflineValue'];
        }
        if (isset($map['OnlineValue'])) {
            $model->onlineValue = $map['OnlineValue'];
        }

        return $model;
    }
}
