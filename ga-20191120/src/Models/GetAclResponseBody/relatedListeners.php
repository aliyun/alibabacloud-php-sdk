<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetAclResponseBody;

use AlibabaCloud\Tea\Model;

class relatedListeners extends Model
{
    /**
     * @var string
     */
    public $listenerId;

    /**
     * @var string
     */
    public $aclType;

    /**
     * @var string
     */
    public $acceleratorId;
    protected $_name = [
        'listenerId'    => 'ListenerId',
        'aclType'       => 'AclType',
        'acceleratorId' => 'AcceleratorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerId) {
            $res['ListenerId'] = $this->listenerId;
        }
        if (null !== $this->aclType) {
            $res['AclType'] = $this->aclType;
        }
        if (null !== $this->acceleratorId) {
            $res['AcceleratorId'] = $this->acceleratorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return relatedListeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerId'])) {
            $model->listenerId = $map['ListenerId'];
        }
        if (isset($map['AclType'])) {
            $model->aclType = $map['AclType'];
        }
        if (isset($map['AcceleratorId'])) {
            $model->acceleratorId = $map['AcceleratorId'];
        }

        return $model;
    }
}
