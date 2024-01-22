<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

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
        'currentError'  => 'currentError',
        'instances'     => 'instances',
        'requestId'     => 'requestId',
        'versionStatus' => 'versionStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentError) {
            $res['currentError'] = $this->currentError;
        }
        if (null !== $this->instances) {
            $res['instances'] = [];
            if (null !== $this->instances && \is_array($this->instances)) {
                $n = 0;
                foreach ($this->instances as $item) {
                    $res['instances'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->versionStatus) {
            $res['versionStatus'] = [];
            if (null !== $this->versionStatus && \is_array($this->versionStatus)) {
                foreach ($this->versionStatus as $key => $val) {
                    $res['versionStatus'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListInstancesOutput
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['currentError'])) {
            $model->currentError = $map['currentError'];
        }
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n                = 0;
                foreach ($map['instances'] as $item) {
                    $model->instances[$n++] = null !== $item ? InstanceInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['versionStatus'])) {
            $model->versionStatus = $map['versionStatus'];
        }

        return $model;
    }
}
