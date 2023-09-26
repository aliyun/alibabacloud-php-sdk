<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160701\Models;

use AlibabaCloud\Tea\Model;

class AddBlackListRequest extends Model
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
    public $description;

    /**
     * @var string
     */
    public $securityToken;
    protected $_name = [
        'blackContent'  => 'BlackContent',
        'blackType'     => 'BlackType',
        'description'   => 'Description',
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddBlackListRequest
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        return $model;
    }
}
