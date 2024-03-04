<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models\HpoExperimentConfig;

use AlibabaCloud\Tea\Model;

class odpsConfig extends Model
{
    /**
     * @var string
     */
    public $accessId;

    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var string
     */
    public $logViewHost;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $roleArn;
    protected $_name = [
        'accessId'    => 'access_id',
        'accessKey'   => 'access_key',
        'endPoint'    => 'end_point',
        'logViewHost' => 'log_view_host',
        'projectName' => 'project_name',
        'region'      => 'region',
        'roleArn'     => 'role_arn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessId) {
            $res['access_id'] = $this->accessId;
        }
        if (null !== $this->accessKey) {
            $res['access_key'] = $this->accessKey;
        }
        if (null !== $this->endPoint) {
            $res['end_point'] = $this->endPoint;
        }
        if (null !== $this->logViewHost) {
            $res['log_view_host'] = $this->logViewHost;
        }
        if (null !== $this->projectName) {
            $res['project_name'] = $this->projectName;
        }
        if (null !== $this->region) {
            $res['region'] = $this->region;
        }
        if (null !== $this->roleArn) {
            $res['role_arn'] = $this->roleArn;
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
        if (isset($map['access_id'])) {
            $model->accessId = $map['access_id'];
        }
        if (isset($map['access_key'])) {
            $model->accessKey = $map['access_key'];
        }
        if (isset($map['end_point'])) {
            $model->endPoint = $map['end_point'];
        }
        if (isset($map['log_view_host'])) {
            $model->logViewHost = $map['log_view_host'];
        }
        if (isset($map['project_name'])) {
            $model->projectName = $map['project_name'];
        }
        if (isset($map['region'])) {
            $model->region = $map['region'];
        }
        if (isset($map['role_arn'])) {
            $model->roleArn = $map['role_arn'];
        }

        return $model;
    }
}
