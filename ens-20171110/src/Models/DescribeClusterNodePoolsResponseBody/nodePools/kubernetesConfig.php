<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeClusterNodePoolsResponseBody\nodePools;

use AlibabaCloud\Dara\Model;

class kubernetesConfig extends Model
{
    /**
     * @var string
     */
    public $preUserData;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'preUserData' => 'PreUserData',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->preUserData) {
            $res['PreUserData'] = $this->preUserData;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['PreUserData'])) {
            $model->preUserData = $map['PreUserData'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
