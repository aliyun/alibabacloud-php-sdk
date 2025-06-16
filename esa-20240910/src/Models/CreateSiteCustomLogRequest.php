<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

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
     * @var int
     */
    public $siteId;
    protected $_name = [
        'cookies' => 'Cookies',
        'requestHeaders' => 'RequestHeaders',
        'responseHeaders' => 'ResponseHeaders',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        if (\is_array($this->cookies)) {
            Model::validateArray($this->cookies);
        }
        if (\is_array($this->requestHeaders)) {
            Model::validateArray($this->requestHeaders);
        }
        if (\is_array($this->responseHeaders)) {
            Model::validateArray($this->responseHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cookies) {
            if (\is_array($this->cookies)) {
                $res['Cookies'] = [];
                $n1 = 0;
                foreach ($this->cookies as $item1) {
                    $res['Cookies'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestHeaders) {
            if (\is_array($this->requestHeaders)) {
                $res['RequestHeaders'] = [];
                $n1 = 0;
                foreach ($this->requestHeaders as $item1) {
                    $res['RequestHeaders'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->responseHeaders) {
            if (\is_array($this->responseHeaders)) {
                $res['ResponseHeaders'] = [];
                $n1 = 0;
                foreach ($this->responseHeaders as $item1) {
                    $res['ResponseHeaders'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cookies'])) {
            if (!empty($map['Cookies'])) {
                $model->cookies = [];
                $n1 = 0;
                foreach ($map['Cookies'] as $item1) {
                    $model->cookies[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestHeaders'])) {
            if (!empty($map['RequestHeaders'])) {
                $model->requestHeaders = [];
                $n1 = 0;
                foreach ($map['RequestHeaders'] as $item1) {
                    $model->requestHeaders[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ResponseHeaders'])) {
            if (!empty($map['ResponseHeaders'])) {
                $model->responseHeaders = [];
                $n1 = 0;
                foreach ($map['ResponseHeaders'] as $item1) {
                    $model->responseHeaders[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
