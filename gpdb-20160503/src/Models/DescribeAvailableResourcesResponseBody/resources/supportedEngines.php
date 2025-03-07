<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAvailableResourcesResponseBody\resources\supportedEngines\supportedInstanceClasses;
use AlibabaCloud\Tea\Model;

class supportedEngines extends Model
{
    /**
     * @description The instance resource type. Valid values:
     *
     *   **ecs**: elastic storage mode
     *   **serverless**: Serverless mode
     *
     * @example ecs
     *
     * @var string
     */
    public $mode;

    /**
     * @description The available engine version.
     *
     * @example 6.0
     *
     * @var string
     */
    public $supportedEngineVersion;

    /**
     * @description The available specifications.
     *
     * @var supportedInstanceClasses[]
     */
    public $supportedInstanceClasses;
    protected $_name = [
        'mode'                     => 'Mode',
        'supportedEngineVersion'   => 'SupportedEngineVersion',
        'supportedInstanceClasses' => 'SupportedInstanceClasses',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->supportedEngineVersion) {
            $res['SupportedEngineVersion'] = $this->supportedEngineVersion;
        }
        if (null !== $this->supportedInstanceClasses) {
            $res['SupportedInstanceClasses'] = [];
            if (null !== $this->supportedInstanceClasses && \is_array($this->supportedInstanceClasses)) {
                $n = 0;
                foreach ($this->supportedInstanceClasses as $item) {
                    $res['SupportedInstanceClasses'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return supportedEngines
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['SupportedEngineVersion'])) {
            $model->supportedEngineVersion = $map['SupportedEngineVersion'];
        }
        if (isset($map['SupportedInstanceClasses'])) {
            if (!empty($map['SupportedInstanceClasses'])) {
                $model->supportedInstanceClasses = [];
                $n                               = 0;
                foreach ($map['SupportedInstanceClasses'] as $item) {
                    $model->supportedInstanceClasses[$n++] = null !== $item ? supportedInstanceClasses::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
