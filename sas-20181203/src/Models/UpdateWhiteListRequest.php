<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UpdateWhiteListRequest extends Model
{
    /**
     * @description Image repository ID.
     * This parameter is required.
     * @example 19882
     *
     * @var int
     */
    public $registryId;

    /**
     * @description Whitelist list. If there are multiple whitelisted addresses, separate them with a comma (,).
     *
     * This parameter is required.
     * @example 192.168.XXX.XXX,192.180.XXX.XXX
     *
     * @var string
     */
    public $whiteList;
    protected $_name = [
        'registryId' => 'RegistryId',
        'whiteList'  => 'WhiteList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->registryId) {
            $res['RegistryId'] = $this->registryId;
        }
        if (null !== $this->whiteList) {
            $res['WhiteList'] = $this->whiteList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateWhiteListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegistryId'])) {
            $model->registryId = $map['RegistryId'];
        }
        if (isset($map['WhiteList'])) {
            $model->whiteList = $map['WhiteList'];
        }

        return $model;
    }
}
