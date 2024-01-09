<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hdr\V20170925\Models;

use AlibabaCloud\Tea\Model;

class DeleteSitePairRequest extends Model
{
    /**
     * @var string
     */
    public $securityToken;

    /**
     * @example s-0003obqyc8f8a6u3bfw4
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
     * @return DeleteSitePairRequest
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
