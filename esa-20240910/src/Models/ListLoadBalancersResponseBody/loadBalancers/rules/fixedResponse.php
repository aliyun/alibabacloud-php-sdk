<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListLoadBalancersResponseBody\loadBalancers\rules;

use AlibabaCloud\Tea\Model;

class fixedResponse extends Model
{
    /**
     * @description The Content-Type field in the HTTP Header.
     *
     * @example application/json
     *
     * @var string
     */
    public $contentType;

    /**
     * @description The location field in the HTTP response.
     *
     * @example http://www.example.com/index.html
     *
     * @var string
     */
    public $location;

    /**
     * @description The response body value.
     *
     * @example Hello World.
     *
     * @var string
     */
    public $messageBody;

    /**
     * @description Status code.
     *
     * @example 200
     *
     * @var int
     */
    public $statusCode;
    protected $_name = [
        'contentType' => 'ContentType',
        'location' => 'Location',
        'messageBody' => 'MessageBody',
        'statusCode' => 'StatusCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->messageBody) {
            $res['MessageBody'] = $this->messageBody;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fixedResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['MessageBody'])) {
            $model->messageBody = $map['MessageBody'];
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
