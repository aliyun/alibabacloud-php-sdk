<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeMetricRuleBlackListResponseBody\describeMetricRuleBlackList;
use AlibabaCloud\Tea\Model;

class DescribeMetricRuleBlackListResponseBody extends Model
{
    /**
     * @description The categories of the Alibaba Cloud service. For example, ApsaraDB for Redis includes the following categories: ApsaraDB for Redis (standard architecture), ApsaraDB for Redis (cluster architecture), and ApsaraDB for Redis (read/write splitting architecture). In this case, the valid values of this parameter for ApsaraDB for Redis include `kvstore_standard`, `kvstore_sharding`, and `kvstore_splitrw`.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The timestamp when the blacklist policy started to take effect.
     *
     * Unit: milliseconds.
     * @var describeMetricRuleBlackList[]
     */
    public $describeMetricRuleBlackList;

    /**
     * @description The error message.
     *
     * @example The Request is not authorization.
     *
     * @var string
     */
    public $message;

    /**
     * @description The namespace of the cloud service.
     *
     * @example D63E76CB-29AA-5B9F-88CE-400A6F28D428
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The namespace of the cloud service.
     *
     * For more information about the namespaces of different cloud services, see [Appendix 1: Metrics](~~163515~~).
     * @example true
     *
     * @var bool
     */
    public $success;

    /**
     * @description The timestamp when the blacklist policy was created.
     *
     * Unit: milliseconds.
     * @example 1
     *
     * @var int
     */
    public $total;
    protected $_name = [
        'code'                        => 'Code',
        'describeMetricRuleBlackList' => 'DescribeMetricRuleBlackList',
        'message'                     => 'Message',
        'requestId'                   => 'RequestId',
        'success'                     => 'Success',
        'total'                       => 'Total',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->describeMetricRuleBlackList) {
            $res['DescribeMetricRuleBlackList'] = [];
            if (null !== $this->describeMetricRuleBlackList && \is_array($this->describeMetricRuleBlackList)) {
                $n = 0;
                foreach ($this->describeMetricRuleBlackList as $item) {
                    $res['DescribeMetricRuleBlackList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricRuleBlackListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DescribeMetricRuleBlackList'])) {
            if (!empty($map['DescribeMetricRuleBlackList'])) {
                $model->describeMetricRuleBlackList = [];
                $n                                  = 0;
                foreach ($map['DescribeMetricRuleBlackList'] as $item) {
                    $model->describeMetricRuleBlackList[$n++] = null !== $item ? describeMetricRuleBlackList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        return $model;
    }
}
