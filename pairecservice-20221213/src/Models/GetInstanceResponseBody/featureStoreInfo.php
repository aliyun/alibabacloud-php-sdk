<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models\GetInstanceResponseBody;

use AlibabaCloud\Dara\Model;

class featureStoreInfo extends Model
{
    /**
     * @var string
     */
    public $featureDBStatus;

    /**
     * @var string
     */
    public $instanceId;
    protected $_name = [
        'featureDBStatus' => 'FeatureDBStatus',
        'instanceId' => 'InstanceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->featureDBStatus) {
            $res['FeatureDBStatus'] = $this->featureDBStatus;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['FeatureDBStatus'])) {
            $model->featureDBStatus = $map['FeatureDBStatus'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        return $model;
    }
}
