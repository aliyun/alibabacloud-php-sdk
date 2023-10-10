<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class UpdateJvmConfigurationRequest extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example c627c157-560d-*************
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the instance group where the application is deployed. You can call the ListDeployGroup operation to query the group ID. For more information, see [ListDeployGroup](~~62077~~).
     *
     * >
     *
     *   To configure the JVM parameters for an instance group, set this parameter to a specific ID.
     *
     *   To configure the JVM parameters for an application, leave this parameter empty.
     *
     * @example 0afc726e-077e-4357-98b2-db9f7145****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The maximum size of the heap memory. Unit: MB.
     *
     * >
     *
     *   If this parameter is not specified in the group configuration, the value specified in the application configuration is used.
     *
     *   If this parameter is not specified in the application configuration, the default value is used.
     *
     * @example 500
     *
     * @var int
     */
    public $maxHeapSize;

    /**
     * @description The size of the permanent generation heap memory. Unit: MB.
     *
     * >
     *
     *   If this parameter is not specified in the group configuration, the value specified in the application configuration is used.
     *
     *   If this parameter is not specified in the application configuration, the default value is used.
     *
     * @example 1000
     *
     * @var int
     */
    public $maxPermSize;

    /**
     * @description The initial size of the heap memory. Unit: MB.
     *
     * >
     *
     *   If this parameter is not specified in the group configuration, the value specified in the application configuration is used.
     *
     *   If this parameter is not specified in the application configuration, the default value is used.
     *
     * @example 500
     *
     * @var int
     */
    public $minHeapSize;

    /**
     * @description The custom JVM parameters.
     *
     * >
     *
     *   If this parameter is not specified in the group configuration, the value specified in the application configuration is used.
     *
     *   If this parameter is not specified in the application configuration, the default value is used.
     *
     * @example -Dproperty=value
     *
     * @var string
     */
    public $options;
    protected $_name = [
        'appId'       => 'AppId',
        'groupId'     => 'GroupId',
        'maxHeapSize' => 'MaxHeapSize',
        'maxPermSize' => 'MaxPermSize',
        'minHeapSize' => 'MinHeapSize',
        'options'     => 'Options',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->maxHeapSize) {
            $res['MaxHeapSize'] = $this->maxHeapSize;
        }
        if (null !== $this->maxPermSize) {
            $res['MaxPermSize'] = $this->maxPermSize;
        }
        if (null !== $this->minHeapSize) {
            $res['MinHeapSize'] = $this->minHeapSize;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateJvmConfigurationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['MaxHeapSize'])) {
            $model->maxHeapSize = $map['MaxHeapSize'];
        }
        if (isset($map['MaxPermSize'])) {
            $model->maxPermSize = $map['MaxPermSize'];
        }
        if (isset($map['MinHeapSize'])) {
            $model->minHeapSize = $map['MinHeapSize'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }

        return $model;
    }
}
