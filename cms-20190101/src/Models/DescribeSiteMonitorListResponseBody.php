<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\DescribeSiteMonitorListResponseBody\siteMonitors;
use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorListResponseBody extends Model
{
    /**
     * @description The numeric value or character used for matching.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description Indicates whether the DNS server of the carrier is used.
     *
     *   true (default value): The DNS server of the carrier is used.
     *   false: The DNS server of the carrier is not used. The default DNS server or the specified DNS server is used.
     *
     * @example successful
     *
     * @var string
     */
    public $message;

    /**
     * @description Indicates whether the alert rule is included. Valid values:
     *
     *   0: The alert rule is included.
     *   1: The alert rule is not included.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The domain name or IP address of the DNS server.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description Indicates whether ping requests are automatically sent to detect network latency if a detection task fails. Valid values:
     *
     *   false (default value): Ping requests are not automatically sent to detect network latency if a detection task fails.
     *   true: Ping requests are automatically sent to detect network latency if a detection task fails.
     *
     * @example A80DB41C-AF6C-50E1-ADB5-66DCBA3D266B
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The type of the assertion. Valid values:
     *
     *   response_time: checks whether the response time meets expectations.
     *   status_code: checks whether the HTTP status code meets expectations.
     *   header: checks whether the fields in the response header meet expectations.
     *   body_text: checks whether the content in the response body meets expectations by using text matching.
     *   body_json: checks whether the content in the response body meets expectations by using JSON parsing (JSONPath).
     *   body_xml: checks whether the content in the response body meets expectations by using XML parsing (XPath).
     *
     * @var siteMonitors
     */
    public $siteMonitors;

    /**
     * @description The comparison operator of the assertion. Valid values:
     *
     *   contains: contains
     *   doesNotContain: does not contain
     *   matches: matches regular expressions
     *   doesNotMatch: does not match regular expressions
     *   is: equal to a numeric value or matches a character
     *   isNot: not equal to
     *   lessThan: less than
     *   moreThan: greater than
     *
     * @example true
     *
     * @var string
     */
    public $success;

    /**
     * @description Indicates whether redirects are followed if the status code 301 or 302 is returned. Valid values:
     *
     *   true: Redirects are not followed.
     *   false (default value): Redirects are followed.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'code'         => 'Code',
        'message'      => 'Message',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'requestId'    => 'RequestId',
        'siteMonitors' => 'SiteMonitors',
        'success'      => 'Success',
        'totalCount'   => 'TotalCount',
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
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteMonitors) {
            $res['SiteMonitors'] = null !== $this->siteMonitors ? $this->siteMonitors->toMap() : null;
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
     * @return DescribeSiteMonitorListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteMonitors'])) {
            $model->siteMonitors = siteMonitors::fromMap($map['SiteMonitors']);
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
