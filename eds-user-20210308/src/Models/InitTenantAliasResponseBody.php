<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\InitTenantAliasResponseBody\aliasInfo;
use AlibabaCloud\Tea\Model;

class InitTenantAliasResponseBody extends Model
{
    /**
     * @var aliasInfo
     */
    public $aliasInfo;

    /**
     * @example WY23***
     *
     * @var string
     */
    public $data;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aliasInfo' => 'AliasInfo',
        'data' => 'Data',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliasInfo) {
            $res['AliasInfo'] = null !== $this->aliasInfo ? $this->aliasInfo->toMap() : null;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return InitTenantAliasResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliasInfo'])) {
            $model->aliasInfo = aliasInfo::fromMap($map['AliasInfo']);
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
