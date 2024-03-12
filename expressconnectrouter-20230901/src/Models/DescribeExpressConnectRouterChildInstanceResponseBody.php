<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterChildInstanceResponseBody\childInstanceList;
use AlibabaCloud\Tea\Model;

class DescribeExpressConnectRouterChildInstanceResponseBody extends Model
{
    /**
     * @example Authentication is failed for ****
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @var childInstanceList[]
     */
    public $childInstanceList;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @example IllegalParamFormat.EcrId
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @example The param format of EcrId **** is illegal.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @example AAAAAYws9fJ0Ur4MGm/5OkDoW/Zn0J0/sCjivzwX9oBcwFnWaaas/kSG+J/WzLOxJHS4****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 05130E79-588D-5C40-A718-C4863A59****
     *
     * @var string
     */
    public $requestId;

    /**
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'childInstanceList'  => 'ChildInstanceList',
        'code'               => 'Code',
        'dynamicCode'        => 'DynamicCode',
        'dynamicMessage'     => 'DynamicMessage',
        'httpStatusCode'     => 'HttpStatusCode',
        'maxResults'         => 'MaxResults',
        'message'            => 'Message',
        'nextToken'          => 'NextToken',
        'requestId'          => 'RequestId',
        'success'            => 'Success',
        'totalCount'         => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->childInstanceList) {
            $res['ChildInstanceList'] = [];
            if (null !== $this->childInstanceList && \is_array($this->childInstanceList)) {
                $n = 0;
                foreach ($this->childInstanceList as $item) {
                    $res['ChildInstanceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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

    /**
     * @param array $map
     *
     * @return DescribeExpressConnectRouterChildInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessDeniedDetail'])) {
            $model->accessDeniedDetail = $map['AccessDeniedDetail'];
        }
        if (isset($map['ChildInstanceList'])) {
            if (!empty($map['ChildInstanceList'])) {
                $model->childInstanceList = [];
                $n                        = 0;
                foreach ($map['ChildInstanceList'] as $item) {
                    $model->childInstanceList[$n++] = null !== $item ? childInstanceList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
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
