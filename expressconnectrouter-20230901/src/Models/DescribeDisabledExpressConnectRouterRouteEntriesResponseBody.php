<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeDisabledExpressConnectRouterRouteEntriesResponseBody\disabledRouteEntryList;
use AlibabaCloud\Tea\Model;

class DescribeDisabledExpressConnectRouterRouteEntriesResponseBody extends Model
{
    /**
     * @example Authentication is failed for ****
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @var disabledRouteEntryList[]
     */
    public $disabledRouteEntryList;

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
     * @example 6
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
     * @example gAAAAABkDTaRFnmxUoMLVOn8YTIgYFeL2ch8j0sJs8VCIU8SS5438m3D9X1VqspCcaUEHRN9I_AfVwMhZHAhcNivifK_OtQxJQ==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 6FABF516-FED3-5697-BDA2-B18C5D9A****
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
     * @example 2
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->disabledRouteEntryList) {
            $res['DisabledRouteEntryList'] = [];
            if (null !== $this->disabledRouteEntryList && \is_array($this->disabledRouteEntryList)) {
                $n = 0;
                foreach ($this->disabledRouteEntryList as $item) {
                    $res['DisabledRouteEntryList'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return DescribeDisabledExpressConnectRouterRouteEntriesResponseBody
     */
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
                $n                             = 0;
                foreach ($map['DisabledRouteEntryList'] as $item) {
                    $model->disabledRouteEntryList[$n++] = null !== $item ? disabledRouteEntryList::fromMap($item) : $item;
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
