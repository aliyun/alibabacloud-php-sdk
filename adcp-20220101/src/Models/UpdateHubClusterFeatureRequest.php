<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateHubClusterFeatureRequest extends Model
{
    /**
     * @var string
     */
    public $apiServerEipId;

    /**
     * @var bool
     */
    public $auditLogEnabled;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var bool
     */
    public $enableArgoCD;

    /**
     * @var bool
     */
    public $enableMesh;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $publicApiServerEnabled;
    protected $_name = [
        'apiServerEipId'         => 'ApiServerEipId',
        'auditLogEnabled'        => 'AuditLogEnabled',
        'clusterId'              => 'ClusterId',
        'deletionProtection'     => 'DeletionProtection',
        'enableArgoCD'           => 'EnableArgoCD',
        'enableMesh'             => 'EnableMesh',
        'name'                   => 'Name',
        'publicApiServerEnabled' => 'PublicApiServerEnabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerEipId) {
            $res['ApiServerEipId'] = $this->apiServerEipId;
        }
        if (null !== $this->auditLogEnabled) {
            $res['AuditLogEnabled'] = $this->auditLogEnabled;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->enableArgoCD) {
            $res['EnableArgoCD'] = $this->enableArgoCD;
        }
        if (null !== $this->enableMesh) {
            $res['EnableMesh'] = $this->enableMesh;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->publicApiServerEnabled) {
            $res['PublicApiServerEnabled'] = $this->publicApiServerEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHubClusterFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServerEipId'])) {
            $model->apiServerEipId = $map['ApiServerEipId'];
        }
        if (isset($map['AuditLogEnabled'])) {
            $model->auditLogEnabled = $map['AuditLogEnabled'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['EnableArgoCD'])) {
            $model->enableArgoCD = $map['EnableArgoCD'];
        }
        if (isset($map['EnableMesh'])) {
            $model->enableMesh = $map['EnableMesh'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PublicApiServerEnabled'])) {
            $model->publicApiServerEnabled = $map['PublicApiServerEnabled'];
        }

        return $model;
    }
}
