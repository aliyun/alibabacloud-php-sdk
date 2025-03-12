<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListContainerDefenseRuleClustersResponseBody\clusterList;
use AlibabaCloud\Tea\Model;

class ListContainerDefenseRuleClustersResponseBody extends Model
{
    /**
     * @description The clusters.
     *
     * @var clusterList[]
     */
    public $clusterList;

    /**
     * @description The response code. The status code **200** indicates that the request was successful. Other status codes indicate that the request failed. You can identify the cause of the failure based on the status code.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The returned message.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 1F995515-CAF3-5F84-8D82-C9F706AD5070
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'clusterList'    => 'ClusterList',
        'code'           => 'Code',
        'count'          => 'Count',
        'httpStatusCode' => 'HttpStatusCode',
        'message'        => 'Message',
        'requestId'      => 'RequestId',
        'success'        => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterList) {
            $res['ClusterList'] = [];
            if (null !== $this->clusterList && \is_array($this->clusterList)) {
                $n = 0;
                foreach ($this->clusterList as $item) {
                    $res['ClusterList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListContainerDefenseRuleClustersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterList'])) {
            if (!empty($map['ClusterList'])) {
                $model->clusterList = [];
                $n                  = 0;
                foreach ($map['ClusterList'] as $item) {
                    $model->clusterList[$n++] = null !== $item ? clusterList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
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

        return $model;
    }
}
