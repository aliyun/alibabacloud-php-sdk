<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models\ListDbfsAttachableEcsInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class ecsLabelInfo extends Model
{
    /**
     * @example ecs.g7se
     *
     * @var string
     */
    public $instanceTypeFamily;

    /**
     * @example Alibaba Cloud Linux 2.1903 LTS 64 bit
     *
     * @var string
     */
    public $OSName;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;

    /**
     * @example dbfs-test-01
     *
     * @var string
     */
    public $label;

    /**
     * @example i-bp10jb8mqajkmrejgo00
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'instanceTypeFamily' => 'InstanceTypeFamily',
        'OSName'             => 'OSName',
        'status'             => 'Status',
        'zoneId'             => 'ZoneId',
        'label'              => 'label',
        'value'              => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceTypeFamily) {
            $res['InstanceTypeFamily'] = $this->instanceTypeFamily;
        }
        if (null !== $this->OSName) {
            $res['OSName'] = $this->OSName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->label) {
            $res['label'] = $this->label;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ecsLabelInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceTypeFamily'])) {
            $model->instanceTypeFamily = $map['InstanceTypeFamily'];
        }
        if (isset($map['OSName'])) {
            $model->OSName = $map['OSName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['label'])) {
            $model->label = $map['label'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
