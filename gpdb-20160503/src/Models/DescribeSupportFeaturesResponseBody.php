<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Tea\Model;

class DescribeSupportFeaturesResponseBody extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The ID of the request.
     *
     * @example 63E5BE60-91FF-57F1-B873-7F1EB734B93D_2724
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The features supported by the instance. Valid values:
     *
     *   sample_data: sample dataset. For more information, see [Sample dataset](https://help.aliyun.com/document_detail/452278.html).
     *   diagnose_and_optimize: diagnostics and optimization. For more information, see [Diagnostics and optimization](https://help.aliyun.com/document_detail/323453.html).
     *
     * @example [ "sample_data", "diagnose_and_optimize" ]
     *
     * @var string
     */
    public $supportFeatureList;
    protected $_name = [
        'DBInstanceId'       => 'DBInstanceId',
        'requestId'          => 'RequestId',
        'supportFeatureList' => 'SupportFeatureList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->supportFeatureList) {
            $res['SupportFeatureList'] = $this->supportFeatureList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSupportFeaturesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SupportFeatureList'])) {
            $model->supportFeatureList = $map['SupportFeatureList'];
        }

        return $model;
    }
}
