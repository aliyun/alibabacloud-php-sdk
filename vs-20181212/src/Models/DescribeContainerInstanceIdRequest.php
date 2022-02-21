<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerInstanceIdRequest extends Model
{
    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $podIndex;
    protected $_name = [
        'nodeName' => 'NodeName',
        'ownerId'  => 'OwnerId',
        'podIndex' => 'PodIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->podIndex) {
            $res['PodIndex'] = $this->podIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerInstanceIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PodIndex'])) {
            $model->podIndex = $map['PodIndex'];
        }

        return $model;
    }
}
