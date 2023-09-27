<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\Tea\Model;

class RemoveBlackListRequest extends Model
{
    /**
     * @var string
     */
    public $blackContent;

    /**
     * @var string
     */
    public $blackType;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'blackContent'  => 'BlackContent',
        'blackType'     => 'BlackType',
        'securityToken' => 'SecurityToken',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->blackContent) {
            $res['BlackContent'] = $this->blackContent;
        }
        if (null !== $this->blackType) {
            $res['BlackType'] = $this->blackType;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveBlackListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BlackContent'])) {
            $model->blackContent = $map['BlackContent'];
        }
        if (isset($map['BlackType'])) {
            $model->blackType = $map['BlackType'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
