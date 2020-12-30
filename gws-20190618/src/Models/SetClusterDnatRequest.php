<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models;

use AlibabaCloud\Tea\Model;

class SetClusterDnatRequest extends Model
{
    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $natId;

    /**
     * @var string
     */
    public $natEip;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'natId'     => 'NatId',
        'natEip'    => 'NatEip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->natId) {
            $res['NatId'] = $this->natId;
        }
        if (null !== $this->natEip) {
            $res['NatEip'] = $this->natEip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetClusterDnatRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['NatId'])) {
            $model->natId = $map['NatId'];
        }
        if (isset($map['NatEip'])) {
            $model->natEip = $map['NatEip'];
        }

        return $model;
    }
}
