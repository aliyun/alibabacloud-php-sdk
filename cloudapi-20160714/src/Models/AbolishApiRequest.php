<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;

class AbolishApiRequest extends Model
{
    /**
     * @var string
     */
    public $apiId;
    /**
     * @var string
     */
    public $groupId;
    /**
     * @var string
     */
    public $securityToken;
    /**
     * @var string
     */
    public $stageName;
    protected $_name = [
        'apiId'         => 'ApiId',
        'groupId'       => 'GroupId',
        'securityToken' => 'SecurityToken',
        'stageName'     => 'StageName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }

        if (null !== $this->stageName) {
            $res['StageName'] = $this->stageName;
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
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }

        if (isset($map['StageName'])) {
            $model->stageName = $map['StageName'];
        }

        return $model;
    }
}
