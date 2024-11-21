<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\GetSiteCustomLogResponseBody;

use AlibabaCloud\Tea\Model;

class logCustomField extends Model
{
    /**
     * @description The cookie fields.
     *
     * @var string[]
     */
    public $cookies;

    /**
     * @description The request header fields.
     *
     * @var string[]
     */
    public $requestHeaders;

    /**
     * @description The response header fields.
     *
     * @var string[]
     */
    public $responseHeaders;
    protected $_name = [
        'cookies'         => 'Cookies',
        'requestHeaders'  => 'RequestHeaders',
        'responseHeaders' => 'ResponseHeaders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cookies) {
            $res['Cookies'] = $this->cookies;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = $this->requestHeaders;
        }
        if (null !== $this->responseHeaders) {
            $res['ResponseHeaders'] = $this->responseHeaders;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logCustomField
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cookies'])) {
            if (!empty($map['Cookies'])) {
                $model->cookies = $map['Cookies'];
            }
        }
        if (isset($map['RequestHeaders'])) {
            if (!empty($map['RequestHeaders'])) {
                $model->requestHeaders = $map['RequestHeaders'];
            }
        }
        if (isset($map['ResponseHeaders'])) {
            if (!empty($map['ResponseHeaders'])) {
                $model->responseHeaders = $map['ResponseHeaders'];
            }
        }

        return $model;
    }
}
