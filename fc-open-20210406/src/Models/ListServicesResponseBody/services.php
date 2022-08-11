<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\FCOpen\V20210406\Models\ListServicesResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\FCOpen\V20210406\Models\LogConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\NASConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\TracingConfig;
use AlibabaCloud\SDK\FCOpen\V20210406\Models\VPCConfig;

class services extends Model {
    protected $_name = [
        'createdTime' => 'createdTime',
        'description' => 'description',
        'internetAccess' => 'internetAccess',
        'lastModifiedTime' => 'lastModifiedTime',
        'logConfig' => 'logConfig',
        'nasConfig' => 'nasConfig',
        'role' => 'role',
        'serviceId' => 'serviceId',
        'serviceName' => 'serviceName',
        'tracingConfig' => 'tracingConfig',
        'vpcConfig' => 'vpcConfig',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->internetAccess) {
            $res['internetAccess'] = $this->internetAccess;
        }
        if (null !== $this->lastModifiedTime) {
            $res['lastModifiedTime'] = $this->lastModifiedTime;
        }
        if (null !== $this->logConfig) {
            $res['logConfig'] = null !== $this->logConfig ? $this->logConfig->toMap() : null;
        }
        if (null !== $this->nasConfig) {
            $res['nasConfig'] = null !== $this->nasConfig ? $this->nasConfig->toMap() : null;
        }
        if (null !== $this->role) {
            $res['role'] = $this->role;
        }
        if (null !== $this->serviceId) {
            $res['serviceId'] = $this->serviceId;
        }
        if (null !== $this->serviceName) {
            $res['serviceName'] = $this->serviceName;
        }
        if (null !== $this->tracingConfig) {
            $res['tracingConfig'] = null !== $this->tracingConfig ? $this->tracingConfig->toMap() : null;
        }
        if (null !== $this->vpcConfig) {
            $res['vpcConfig'] = null !== $this->vpcConfig ? $this->vpcConfig->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return services
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['createdTime'])){
            $model->createdTime = $map['createdTime'];
        }
        if(isset($map['description'])){
            $model->description = $map['description'];
        }
        if(isset($map['internetAccess'])){
            $model->internetAccess = $map['internetAccess'];
        }
        if(isset($map['lastModifiedTime'])){
            $model->lastModifiedTime = $map['lastModifiedTime'];
        }
        if(isset($map['logConfig'])){
            $model->logConfig = LogConfig::fromMap($map['logConfig']);
        }
        if(isset($map['nasConfig'])){
            $model->nasConfig = NASConfig::fromMap($map['nasConfig']);
        }
        if(isset($map['role'])){
            $model->role = $map['role'];
        }
        if(isset($map['serviceId'])){
            $model->serviceId = $map['serviceId'];
        }
        if(isset($map['serviceName'])){
            $model->serviceName = $map['serviceName'];
        }
        if(isset($map['tracingConfig'])){
            $model->tracingConfig = TracingConfig::fromMap($map['tracingConfig']);
        }
        if(isset($map['vpcConfig'])){
            $model->vpcConfig = VPCConfig::fromMap($map['vpcConfig']);
        }
        return $model;
    }
    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $internetAccess;

    /**
     * @var string
     */
    public $lastModifiedTime;

    /**
     * @var LogConfig
     */
    public $logConfig;

    /**
     * @var NASConfig
     */
    public $nasConfig;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $serviceId;

    /**
     * @var string
     */
    public $serviceName;

    /**
     * @var TracingConfig
     */
    public $tracingConfig;

    /**
     * @var VPCConfig
     */
    public $vpcConfig;

}
