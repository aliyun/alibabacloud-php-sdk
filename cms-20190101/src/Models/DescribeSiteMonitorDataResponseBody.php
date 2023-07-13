<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeSiteMonitorDataResponseBody extends Model
{
    /**
     * @description The returned message.
     *
     * @example 200
     *
     * @var string
     */
    public $code;

    /**
     * @description The pagination cursor.
     *
     * @example [{"Maximum":247,"Mimimum":61,"Average":154,"userId":"127067667954****","taskId":"49f7b317-7645-4cc9-94fd-ea42e522****","timestamp":1551581760000}]
     *
     * @var string
     */
    public $data;

    /**
     * @description The returned data contains a JSON string that may consist of several or all of the following parameters:
     *
     *   Error4XXRate: the percentage of detection results with 4XX status codes.
     *   Error6XXRate: the percentage of detection results with 6XX status codes.
     *   Error5XXRate: the percentage of detection results with 5XX status codes.
     *   Error4XXNumber: the number of detection results with 4XX status codes.
     *   Error5XXNumber: the number of detection results with 5XX status codes.
     *   Error6XXNumber: the number of detection results with 6XX status codes.
     *   Over5totalTime: the percentage of detection requests to which the response time exceeds 5,000 ms.
     *   Over3totalTime: the percentage of detection requests to which the response time exceeds 3,000 ms.
     *   Over2totalTime: the percentage of detection requests to which the response time exceeds 2,000 ms.
     *   Over10FailureRate: the percentage of detection points whose failure rate of detection requests exceeds 10%.
     *   Over100FailureRate: the percentage of detection points whose failure rate of detection requests exceeds 99%.
     *   Over30FailureRate: the percentage of detection points whose failure rate of detection requests exceeds 30%.
     *   Over50FailureRate: the percentage of detection points whose failure rate of detection requests exceeds 50%.
     *   Over80FailureRate: the percentage of detection points whose failure rate of detection requests exceeds 80%.
     *   Over90FailureRate: the percentage of detection points whose failure rate of detection requests exceeds 90%.
     *   Over400NumberRate: the percentage of detection results with status codes that are greater than 400.
     *   Over400NumberRate: the percentage of detection results with status codes that are greater than 500.
     *   AvailableNumber: the number of detection results in which the status code is smaller than 400.
     *   UnavailableNumber: the number of detection results in which the status code is greater than 399.
     *   Availability: the percentage of detection results in which the status code is smaller than 400.
     *   Unavailability: the percentage of detection results in which the status code is greater than 399.
     *   ErrorCodeMaximum: the maximum error code in the detection results that were returned in a specific period. Assume that five status codes are returned in a minute after detection requests are sent from five detection points. The status code in four detection results is 200 and that in one detection result is 404. In this case, the maximum error code is 404.
     *   ErrorCodeMinimum: the minimum error code in the detection results returned in a monitoring period. Assume that five status codes are returned in a minute after detection requests are sent from five detection points. The status code in four detection results is 200 and that in one detection result is 404. In this case, the minimum error code is 200.
     *
     * >  We recommend that you use the AvailableNumber, UnavailableNumber, Availability, Unavailability, ErrorCodeMaximum, or ErrorCodeMinimum metric, whose value is easy to calculate.
     * @example Successful
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example ea42e5220930ea42e522****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description Indicates whether the call was successful. The value true indicates a success. The value false indicates a failure.
     *
     * @example 3febb181-0d98-4af9-8b04-7faf36b048b9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The HTTP status code.
     *
     * >  The status code 200 indicates that the call was successful.
     * @example true
     *
     * @var string
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'nextToken' => 'NextToken',
        'requestId' => 'RequestId',
        'success'   => 'Success',
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
        if (null !== $this->data) {
            $res['Data'] = $this->data;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSiteMonitorDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
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

        return $model;
    }
}
