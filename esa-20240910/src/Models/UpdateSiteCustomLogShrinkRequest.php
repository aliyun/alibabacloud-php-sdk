<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class UpdateSiteCustomLogShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $cookiesShrink;
    /**
     * @var string
     */
    public $requestHeadersShrink;
    /**
     * @var string
     */
    public $responseHeadersShrink;
    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'cookiesShrink'         => 'Cookies',
        'requestHeadersShrink'  => 'RequestHeaders',
        'responseHeadersShrink' => 'ResponseHeaders',
        'siteId'                => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cookiesShrink) {
            $res['Cookies'] = $this->cookiesShrink;
        }

        if (null !== $this->requestHeadersShrink) {
            $res['RequestHeaders'] = $this->requestHeadersShrink;
        }

        if (null !== $this->responseHeadersShrink) {
            $res['ResponseHeaders'] = $this->responseHeadersShrink;
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
            $model->cookiesShrink = $map['Cookies'];
        }

        if (isset($map['RequestHeaders'])) {
            $model->requestHeadersShrink = $map['RequestHeaders'];
        }

        if (isset($map['ResponseHeaders'])) {
            $model->responseHeadersShrink = $map['ResponseHeaders'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
