<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetCredentialReportResponseBody extends Model
{
    /**
     * @description The content of the user credential report.
     *
     * The report is Base64-encoded. After you decode the report, the credential report is in the CSV format.
     * @example OVZWK4RMOVZW****
     *
     * @var string
     */
    public $content;

    /**
     * @description The time when the user credential report was generated.
     *
     * @example 2020-10-19T15:06:52Z
     *
     * @var string
     */
    public $generatedTime;

    /**
     * @description Indicates whether the response is truncated. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var string
     */
    public $isTruncated;

    /**
     * @description The parameter that is used to obtain the truncated part. This parameter takes effect only when `IsTruncated` is set to true.
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The request ID.
     *
     * @example 7A01826E-7601-44B0-B4DF-2B0C509836DE
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'content'       => 'Content',
        'generatedTime' => 'GeneratedTime',
        'isTruncated'   => 'IsTruncated',
        'nextToken'     => 'NextToken',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->generatedTime) {
            $res['GeneratedTime'] = $this->generatedTime;
        }
        if (null !== $this->isTruncated) {
            $res['IsTruncated'] = $this->isTruncated;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCredentialReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['GeneratedTime'])) {
            $model->generatedTime = $map['GeneratedTime'];
        }
        if (isset($map['IsTruncated'])) {
            $model->isTruncated = $map['IsTruncated'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
