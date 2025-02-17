<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeDisabledExpressConnectRouterRouteEntriesResponseBody\disabledRouteEntryList;

class DescribeDisabledExpressConnectRouterRouteEntriesResponseBody extends Model
{
    /**
     * @var string
     */
    public $accessDeniedDetail;
    /**
     * @var string
     */
    public $code;
    /**
     * @var disabledRouteEntryList[]
     */
    public $disabledRouteEntryList;
    /**
     * @var string
     */
    public $dynamicCode;
    /**
     * @var string
     */
    public $dynamicMessage;
    /**
     * @var int
     */
    public $httpStatusCode;
    /**
     * @var int
     */
    public $maxResults;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $nextToken;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail'     => 'AccessDeniedDetail',
        'code'                   => 'Code',
        'disabledRouteEntryList' => 'DisabledRouteEntryList',
        'dynamicCode'            => 'DynamicCode',
        'dynamicMessage'         => 'DynamicMessage',
        'httpStatusCode'         => 'HttpStatusCode',
        'maxResults'             => 'MaxResults',
        'message'                => 'Message',
        'nextToken'              => 'NextToken',
        'requestId'              => 'RequestId',
        'success'                => 'Success',
        'totalCount'             => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->disabledRouteEntryList)) {
            Model::validateArray($this->disabledRouteEntryList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }

        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->disabledRouteEntryList) {
            if (\is_array($this->disabledRouteEntryList)) {
                $res['DisabledRouteEntryList'] = [];
                $n1                            = 0;
                foreach ($this->disabledRouteEntryList as $item1) {
                    $res['DisabledRouteEntryList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->dynamicCode) {
            $res['DynamicCode'] = $this->dynamicCode;
        }

        if (null !== $this->dynamicMessage) {
            $res['DynamicMessage'] = $this->dynamicMessage;
        }

        if (null !== $this->httpStatusCode) {
            $res['HttpStatusCode'] = $this->httpStatusCode;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }

        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['DisabledRouteEntryList'])) {
            if (!empty($map['DisabledRouteEntryList'])) {
                $model->disabledRouteEntryList = [];
                $n1                            = 0;
                foreach ($map['DisabledRouteEntryList'] as $item1) {
                    $model->disabledRouteEntryList[$n1++] = disabledRouteEntryList::fromMap($item1);
                }
            }
        }

        if (isset($map['DynamicCode'])) {
            $model->dynamicCode = $map['DynamicCode'];
        }

        if (isset($map['DynamicMessage'])) {
            $model->dynamicMessage = $map['DynamicMessage'];
        }

        if (isset($map['HttpStatusCode'])) {
            $model->httpStatusCode = $map['HttpStatusCode'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
