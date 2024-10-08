<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class CreateSiteCustomLogRequest extends Model
{
    /**
     * @var string[]
     */
    public $cookies;

    /**
     * @var string[]
     */
    public $requestHeaders;

    /**
     * @var string[]
     */
    public $responseHeaders;

    /**
     * @example 11223
     *
     * @var int
     */
    public $siteId;
    protected $_name = [
        'cookies'         => 'Cookies',
        'requestHeaders'  => 'RequestHeaders',
        'responseHeaders' => 'ResponseHeaders',
        'siteId'          => 'SiteId',
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
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSiteCustomLogRequest
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
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
