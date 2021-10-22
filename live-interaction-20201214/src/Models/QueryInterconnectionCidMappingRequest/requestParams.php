<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Liveinteraction\V20201214\Models\QueryInterconnectionCidMappingRequest;

use AlibabaCloud\Tea\Model;

class requestParams extends Model
{
    /**
     * @description 会话ID
     *
     * @var string
     */
    public $srcCid;

    /**
     * @description 会话ID类型; 1: AIM会话ID 2: 钉钉会话ID
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'srcCid' => 'SrcCid',
        'type'   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->srcCid) {
            $res['SrcCid'] = $this->srcCid;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestParams
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SrcCid'])) {
            $model->srcCid = $map['SrcCid'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
