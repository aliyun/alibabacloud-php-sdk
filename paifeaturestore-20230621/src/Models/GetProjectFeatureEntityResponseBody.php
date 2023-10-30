<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class GetProjectFeatureEntityResponseBody extends Model
{
    /**
     * @example 3
     *
     * @var string
     */
    public $featureEntityId;

    /**
     * @example user_id
     *
     * @var string
     */
    public $joinId;

    /**
     * @example feature_entity_1
     *
     * @var string
     */
    public $name;

    /**
     * @example project_1
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 37D19490-AB69-567D-A852-407C94E510E9
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 34245
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'featureEntityId' => 'FeatureEntityId',
        'joinId'          => 'JoinId',
        'name'            => 'Name',
        'projectName'     => 'ProjectName',
        'requestId'       => 'RequestId',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->featureEntityId) {
            $res['FeatureEntityId'] = $this->featureEntityId;
        }
        if (null !== $this->joinId) {
            $res['JoinId'] = $this->joinId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProjectFeatureEntityResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FeatureEntityId'])) {
            $model->featureEntityId = $map['FeatureEntityId'];
        }
        if (isset($map['JoinId'])) {
            $model->joinId = $map['JoinId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
