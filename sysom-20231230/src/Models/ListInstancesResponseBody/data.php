<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListInstancesResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $clusterId;
    /**
     * @var string
     */
    public $instance;
    /**
     * @var string
     */
    public $kernelVersion;
    /**
     * @var mixed
     */
    public $meta;
    /**
     * @var string
     */
    public $osArch;
    /**
     * @var string
     */
    public $osHealthScore;
    /**
     * @var string
     */
    public $osName;
    /**
     * @var string
     */
    public $osNameId;
    /**
     * @var string
     */
    public $osVersion;
    /**
     * @var string
     */
    public $osVersionId;
    /**
     * @var string
     */
    public $region;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'clusterId'     => 'cluster_id',
        'instance'      => 'instance',
        'kernelVersion' => 'kernel_version',
        'meta'          => 'meta',
        'osArch'        => 'os_arch',
        'osHealthScore' => 'os_health_score',
        'osName'        => 'os_name',
        'osNameId'      => 'os_name_id',
        'osVersion'     => 'os_version',
        'osVersionId'   => 'os_version_id',
        'region'        => 'region',
        'status'        => 'status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }

        if (null !== $this->instance) {
            $res['instance'] = $this->instance;
        }

        if (null !== $this->kernelVersion) {
            $res['kernel_version'] = $this->kernelVersion;
        }

        if (null !== $this->meta) {
            $res['meta'] = $this->meta;
        }

        if (null !== $this->osArch) {
            $res['os_arch'] = $this->osArch;
        }

        if (null !== $this->osHealthScore) {
            $res['os_health_score'] = $this->osHealthScore;
        }

        if (null !== $this->osName) {
            $res['os_name'] = $this->osName;
        }

        if (null !== $this->osNameId) {
            $res['os_name_id'] = $this->osNameId;
        }

        if (null !== $this->osVersion) {
            $res['os_version'] = $this->osVersion;
        }

        if (null !== $this->osVersionId) {
            $res['os_version_id'] = $this->osVersionId;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
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
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }

        if (isset($map['instance'])) {
            $model->instance = $map['instance'];
        }

        if (isset($map['kernel_version'])) {
            $model->kernelVersion = $map['kernel_version'];
        }

        if (isset($map['meta'])) {
            $model->meta = $map['meta'];
        }

        if (isset($map['os_arch'])) {
            $model->osArch = $map['os_arch'];
        }

        if (isset($map['os_health_score'])) {
            $model->osHealthScore = $map['os_health_score'];
        }

        if (isset($map['os_name'])) {
            $model->osName = $map['os_name'];
        }

        if (isset($map['os_name_id'])) {
            $model->osNameId = $map['os_name_id'];
        }

        if (isset($map['os_version'])) {
            $model->osVersion = $map['os_version'];
        }

        if (isset($map['os_version_id'])) {
            $model->osVersionId = $map['os_version_id'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
