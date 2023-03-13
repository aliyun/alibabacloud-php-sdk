<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeClusterResponseBody;

use AlibabaCloud\Tea\Model;

class networks extends Model
{
    /**
     * @example vpd-iqd7xunc
     *
     * @var string
     */
    public $vpdId;
    protected $_name = [
        'vpdId' => 'VpdId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpdId) {
            $res['VpdId'] = $this->vpdId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networks
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VpdId'])) {
            $model->vpdId = $map['VpdId'];
        }

        return $model;
    }
}
