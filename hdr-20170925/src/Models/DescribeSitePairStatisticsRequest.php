<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class DescribeSitePairStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example s-0005qxusucbp8acutbrv
     *
     * @var string
     */
    public $sitePairId;
    protected $_name = [
        'securityToken' => 'SecurityToken',
        'sitePairId'    => 'SitePairId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->sitePairId) {
            $res['SitePairId'] = $this->sitePairId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSitePairStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['SitePairId'])) {
            $model->sitePairId = $map['SitePairId'];
        }

        return $model;
    }
}
