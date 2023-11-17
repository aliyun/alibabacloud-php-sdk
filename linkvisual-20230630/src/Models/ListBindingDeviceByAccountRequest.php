<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class ListBindingDeviceByAccountRequest extends Model
{
    /**
     * @var string
     */
    public $identityId;

    /**
     * @var string
     */
    public $openId;

    /**
     * @var string
     */
    public $openIdAppKey;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $subDevice;
    protected $_name = [
        'identityId'   => 'IdentityId',
        'openId'       => 'OpenId',
        'openIdAppKey' => 'OpenIdAppKey',
        'pageNo'       => 'PageNo',
        'pageSize'     => 'PageSize',
        'subDevice'    => 'SubDevice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->identityId) {
            $res['IdentityId'] = $this->identityId;
        }
        if (null !== $this->openId) {
            $res['OpenId'] = $this->openId;
        }
        if (null !== $this->openIdAppKey) {
            $res['OpenIdAppKey'] = $this->openIdAppKey;
        }
        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->subDevice) {
            $res['SubDevice'] = $this->subDevice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListBindingDeviceByAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IdentityId'])) {
            $model->identityId = $map['IdentityId'];
        }
        if (isset($map['OpenId'])) {
            $model->openId = $map['OpenId'];
        }
        if (isset($map['OpenIdAppKey'])) {
            $model->openIdAppKey = $map['OpenIdAppKey'];
        }
        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SubDevice'])) {
            $model->subDevice = $map['SubDevice'];
        }

        return $model;
    }
}
