<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models;

use AlibabaCloud\SDK\ExpressConnectRouter\V20230901\Models\DescribeExpressConnectRouterRouteEntriesResponseBody\routeEntriesList;
use AlibabaCloud\Tea\Model;

class DescribeExpressConnectRouterRouteEntriesResponseBody extends Model
{
    /**
     * @description The details about the access denial.
     *
     * @example Authentication is failed for ****
     *
     * @var string
     */
    public $accessDeniedDetail;

    /**
     * @description The response code. The status code 200 indicates that the request was successful. Other status codes indicate that the request failed. For more information, see Error codes.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The dynamic error code.
     *
     * @example IllegalParamFormat.EcrId
     *
     * @var string
     */
    public $dynamicCode;

    /**
     * @description The dynamic part in the error message. This parameter is used to replace the `%s` variable in **ErrMessage**.
     *
     * >  For example, if the value of **ErrMessage** is **The Value of Input Parameter %s is not valid** and the value of **DynamicMessage** is **DtsJobId**, the request parameter **DtsJobId** is invalid.
     *
     * @example The param format of EcrId **** is illegal.
     *
     * @var string
     */
    public $dynamicMessage;

    /**
     * @description The HTTP status code.
     *
     * @example 200
     *
     * @var int
     */
    public $httpStatusCode;

    /**
     * @description The total number of entries returned. Valid values: 1 to 2147483647. Default value: 10
     *
     * @example 6
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The returned message.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description A pagination token. It can be used in the next request to retrieve a new page of results. Valid values:
     *
     *   If **NextToken** is empty, no next page exists.
     *   If a value of **NextToken** is returned, the value indicates the token that is used for the next query.
     *
     * @example gAAAAABkWwFTUMNCdWC0VMYOIylA56Hx6JUfCZlk5hQ5g_fnKmetN6303tqq5UJ2ouJzyT2fDOdzb-NqyEB5jcY8Z2euX7qHDA==
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 6FABF516-FED3-5697-BDA2-B18C5D9A****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The routes.
     *
     * @var routeEntriesList[]
     */
    public $routeEntriesList;

    /**
     * @description Indicates whether the request was successful. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example True
     *
     * @var bool
     */
    public $success;

    /**
     * @description The total number of route entries.
     *
     * @example 2
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'accessDeniedDetail' => 'AccessDeniedDetail',
        'code' => 'Code',
        'dynamicCode' => 'DynamicCode',
        'dynamicMessage' => 'DynamicMessage',
        'httpStatusCode' => 'HttpStatusCode',
        'maxResults' => 'MaxResults',
        'message' => 'Message',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'routeEntriesList' => 'RouteEntriesList',
        'success' => 'Success',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessDeniedDetail) {
            $res['AccessDeniedDetail'] = $this->accessDeniedDetail;
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
        if (null !== $this->routeEntriesList) {
            $res['RouteEntriesList'] = [];
            if (null !== $this->routeEntriesList && \is_array($this->routeEntriesList)) {
                $n = 0;
                foreach ($this->routeEntriesList as $item) {
                    $res['RouteEntriesList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeExpressConnectRouterRouteEntriesResponseBody
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
        if (isset($map['RouteEntriesList'])) {
            if (!empty($map['RouteEntriesList'])) {
                $model->routeEntriesList = [];
                $n = 0;
                foreach ($map['RouteEntriesList'] as $item) {
                    $model->routeEntriesList[$n++] = null !== $item ? routeEntriesList::fromMap($item) : $item;
                }
            }
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
