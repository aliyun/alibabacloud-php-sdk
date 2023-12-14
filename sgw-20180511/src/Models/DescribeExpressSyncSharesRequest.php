<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\Tea\Model;

class DescribeExpressSyncSharesRequest extends Model
{
    /**
     * @example sync-0002xetjdlxne2sd***,sync-0004agfrbke1l39p***
     *
     * @var string
     */
    public $expressSyncIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $isExternal;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'expressSyncIds' => 'ExpressSyncIds',
        'isExternal'     => 'IsExternal',
        'securityToken'  => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expressSyncIds) {
            $res['ExpressSyncIds'] = $this->expressSyncIds;
        }
        if (null !== $this->isExternal) {
            $res['IsExternal'] = $this->isExternal;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeExpressSyncSharesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpressSyncIds'])) {
            $model->expressSyncIds = $map['ExpressSyncIds'];
        }
        if (isset($map['IsExternal'])) {
            $model->isExternal = $map['IsExternal'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
