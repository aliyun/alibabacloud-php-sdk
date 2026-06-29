<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetDcvDelegationResponseBody extends Model
{
    /**
     * @var string
     */
    public $delegationDomain;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $siteId;

    /**
     * @var string
     */
    public $siteName;
    protected $_name = [
        'delegationDomain' => 'DelegationDomain',
        'requestId' => 'RequestId',
        'siteId' => 'SiteId',
        'siteName' => 'SiteName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->delegationDomain) {
            $res['DelegationDomain'] = $this->delegationDomain;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }

        if (null !== $this->siteName) {
            $res['SiteName'] = $this->siteName;
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
        if (isset($map['DelegationDomain'])) {
            $model->delegationDomain = $map['DelegationDomain'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        if (isset($map['SiteName'])) {
            $model->siteName = $map['SiteName'];
        }

        return $model;
    }
}
