<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Dara\Model;

class ListInstancesOutput extends Model
{
    /**
     * @var string
     */
    public $currentError;

    /**
     * @var InstanceInfo[]
     */
    public $instances;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var VersionStatus[]
     */
    public $versionStatus;
    protected $_name = [
        'currentError' => 'currentError',
        'instances' => 'instances',
        'requestId' => 'requestId',
        'versionStatus' => 'versionStatus',
    ];

    public function validate()
    {
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (\is_array($this->versionStatus)) {
            Model::validateArray($this->versionStatus);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentError) {
            $res['currentError'] = $this->currentError;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['instances'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->versionStatus) {
            if (\is_array($this->versionStatus)) {
                $res['versionStatus'] = [];
                foreach ($this->versionStatus as $key1 => $value1) {
                    $res['versionStatus'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
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
        if (isset($map['currentError'])) {
            $model->currentError = $map['currentError'];
        }

        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['instances'] as $item1) {
                    $model->instances[$n1] = InstanceInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['versionStatus'])) {
            if (!empty($map['versionStatus'])) {
                $model->versionStatus = [];
                foreach ($map['versionStatus'] as $key1 => $value1) {
                    $model->versionStatus[$key1] = VersionStatus::fromMap($value1);
                }
            }
        }

        return $model;
    }
}
