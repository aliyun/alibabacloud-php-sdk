<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class ListUserVpcRequest extends Model
{
    /**
     * @var string
     */
    public $k8sRegionId;
    protected $_name = [
        'k8sRegionId' => 'K8sRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->k8sRegionId) {
            $res['K8sRegionId'] = $this->k8sRegionId;
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
        if (isset($map['K8sRegionId'])) {
            $model->k8sRegionId = $map['K8sRegionId'];
        }

        return $model;
    }
}
