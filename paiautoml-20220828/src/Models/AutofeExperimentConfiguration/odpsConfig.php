<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\AutofeExperimentConfiguration;

use AlibabaCloud\Tea\Model;

class odpsConfig extends Model
{
    /**
     * @var string
     */
    public $odpsAccessId;

    /**
     * @var string
     */
    public $odpsAccessKey;

    /**
     * @example http://service.cn-beijing.maxcompute.aliyun.com/api
     *
     * @var string
     */
    public $odpsEndpoint;

    /**
     * @var string
     */
    public $odpsProjectName;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $odpsRegionId;

    /**
     * @var string
     */
    public $odpsRoleArn;
    protected $_name = [
        'odpsAccessId'    => 'odps_access_id',
        'odpsAccessKey'   => 'odps_access_key',
        'odpsEndpoint'    => 'odps_endpoint',
        'odpsProjectName' => 'odps_project_name',
        'odpsRegionId'    => 'odps_region_id',
        'odpsRoleArn'     => 'odps_role_arn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->odpsAccessId) {
            $res['odps_access_id'] = $this->odpsAccessId;
        }
        if (null !== $this->odpsAccessKey) {
            $res['odps_access_key'] = $this->odpsAccessKey;
        }
        if (null !== $this->odpsEndpoint) {
            $res['odps_endpoint'] = $this->odpsEndpoint;
        }
        if (null !== $this->odpsProjectName) {
            $res['odps_project_name'] = $this->odpsProjectName;
        }
        if (null !== $this->odpsRegionId) {
            $res['odps_region_id'] = $this->odpsRegionId;
        }
        if (null !== $this->odpsRoleArn) {
            $res['odps_role_arn'] = $this->odpsRoleArn;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return odpsConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['odps_access_id'])) {
            $model->odpsAccessId = $map['odps_access_id'];
        }
        if (isset($map['odps_access_key'])) {
            $model->odpsAccessKey = $map['odps_access_key'];
        }
        if (isset($map['odps_endpoint'])) {
            $model->odpsEndpoint = $map['odps_endpoint'];
        }
        if (isset($map['odps_project_name'])) {
            $model->odpsProjectName = $map['odps_project_name'];
        }
        if (isset($map['odps_region_id'])) {
            $model->odpsRegionId = $map['odps_region_id'];
        }
        if (isset($map['odps_role_arn'])) {
            $model->odpsRoleArn = $map['odps_role_arn'];
        }

        return $model;
    }
}
