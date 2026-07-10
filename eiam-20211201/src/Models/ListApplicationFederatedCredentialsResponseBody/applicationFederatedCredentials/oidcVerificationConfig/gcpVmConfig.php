<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListApplicationFederatedCredentialsResponseBody\applicationFederatedCredentials\oidcVerificationConfig;

use AlibabaCloud\Dara\Model;

class gcpVmConfig extends Model
{
    /**
     * @var string[]
     */
    public $instanceIds;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $serviceAccountId;
    protected $_name = [
        'instanceIds' => 'InstanceIds',
        'projectId' => 'ProjectId',
        'serviceAccountId' => 'ServiceAccountId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceIds)) {
            Model::validateArray($this->instanceIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceIds) {
            if (\is_array($this->instanceIds)) {
                $res['InstanceIds'] = [];
                $n1 = 0;
                foreach ($this->instanceIds as $item1) {
                    $res['InstanceIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->serviceAccountId) {
            $res['ServiceAccountId'] = $this->serviceAccountId;
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
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = [];
                $n1 = 0;
                foreach ($map['InstanceIds'] as $item1) {
                    $model->instanceIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['ServiceAccountId'])) {
            $model->serviceAccountId = $map['ServiceAccountId'];
        }

        return $model;
    }
}
