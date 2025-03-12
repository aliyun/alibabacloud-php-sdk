<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Tea\Model;

class GetCredentialReportRequest extends Model
{
    /**
     * @description The number of entries per page. If a response is truncated because it reaches the value of `MaxItems`, the value of `IsTruncated` will be true.
     *
     * Valid values: 1 to 3501. Default value: 3501.
     * @example 1000
     *
     * @var string
     */
    public $maxItems;

    /**
     * @description The token that is used to initiate the next request if the response of the current request is truncated. You can use the token to initiate another request and obtain the remaining records.``
     *
     * @example EXAMPLE
     *
     * @var string
     */
    public $nextToken;
    protected $_name = [
        'maxItems'  => 'MaxItems',
        'nextToken' => 'NextToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxItems) {
            $res['MaxItems'] = $this->maxItems;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetCredentialReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxItems'])) {
            $model->maxItems = $map['MaxItems'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        return $model;
    }
}
