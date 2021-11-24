<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListListenersByIpResponseBody;

use AlibabaCloud\Tea\Model;

class listeners extends Model
{
    /**
     * @var string
     */
    public $dataId;

    /**
     * @var string
     */
    public $group;

    /**
     * @var string
     */
    public $md5;
    protected $_name = [
        'dataId' => 'DataId',
        'group'  => 'Group',
        'md5'    => 'Md5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataId) {
            $res['DataId'] = $this->dataId;
        }
        if (null !== $this->group) {
            $res['Group'] = $this->group;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listeners
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataId'])) {
            $model->dataId = $map['DataId'];
        }
        if (isset($map['Group'])) {
            $model->group = $map['Group'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        return $model;
    }
}
