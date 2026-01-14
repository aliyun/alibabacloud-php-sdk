<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models;

use AlibabaCloud\Dara\Model;

class AssociateAclsWithListenerResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $aclIds;

    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclIds' => 'AclIds',
        'listenerId' => 'ListenerId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->aclIds)) {
            Model::validateArray($this->aclIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aclIds) {
            if (\is_array($this->aclIds)) {
                $res['AclIds'] = [];
                $n1 = 0;
                foreach ($this->aclIds as $item1) {
                    $res['AclIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AclIds'])) {
            if (!empty($map['AclIds'])) {
                $model->aclIds = [];
                $n1 = 0;
                foreach ($map['AclIds'] as $item1) {
                    $model->aclIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
