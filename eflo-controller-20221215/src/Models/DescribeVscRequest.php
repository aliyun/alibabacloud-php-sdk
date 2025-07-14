<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class DescribeVscRequest extends Model
{
    /**
     * @description The VSC ID.
     *
     * This parameter is required.
     *
     * @example vsc-001
     *
     * @var string
     */
    public $vscId;
    protected $_name = [
        'vscId' => 'VscId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->vscId) {
            $res['VscId'] = $this->vscId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVscRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VscId'])) {
            $model->vscId = $map['VscId'];
        }

        return $model;
    }
}
