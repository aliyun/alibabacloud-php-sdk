<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListAclRelationsResponseBody\aclRelations;
use AlibabaCloud\Tea\Model;

class ListAclRelationsResponseBody extends Model
{
    /**
     * @description 访问控制列表
     *
     * @var aclRelations[]
     */
    public $aclRelations;

    /**
     * @description 请求id
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'aclRelations' => 'AclRelations',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aclRelations) {
            $res['AclRelations'] = [];
            if (null !== $this->aclRelations && \is_array($this->aclRelations)) {
                $n = 0;
                foreach ($this->aclRelations as $item) {
                    $res['AclRelations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAclRelationsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AclRelations'])) {
            if (!empty($map['AclRelations'])) {
                $model->aclRelations = [];
                $n                   = 0;
                foreach ($map['AclRelations'] as $item) {
                    $model->aclRelations[$n++] = null !== $item ? aclRelations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
