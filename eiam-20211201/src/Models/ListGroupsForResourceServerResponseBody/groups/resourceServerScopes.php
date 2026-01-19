<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForResourceServerResponseBody\groups;

use AlibabaCloud\Dara\Model;

class resourceServerScopes extends Model
{
    /**
     * @var string
     */
    public $resourceServerScopeId;

    /**
     * @var string
     */
    public $resourceServerScopeName;
    protected $_name = [
        'resourceServerScopeId' => 'ResourceServerScopeId',
        'resourceServerScopeName' => 'ResourceServerScopeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->resourceServerScopeId) {
            $res['ResourceServerScopeId'] = $this->resourceServerScopeId;
        }

        if (null !== $this->resourceServerScopeName) {
            $res['ResourceServerScopeName'] = $this->resourceServerScopeName;
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
        if (isset($map['ResourceServerScopeId'])) {
            $model->resourceServerScopeId = $map['ResourceServerScopeId'];
        }

        if (isset($map['ResourceServerScopeName'])) {
            $model->resourceServerScopeName = $map['ResourceServerScopeName'];
        }

        return $model;
    }
}
