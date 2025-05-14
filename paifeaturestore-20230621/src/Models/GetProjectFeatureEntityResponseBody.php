<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Dara\Model;

class GetProjectFeatureEntityResponseBody extends Model
{
    /**
     * @var string
     */
    public $featureEntityId;

    /**
     * @var string
     */
    public $joinId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'featureEntityId' => 'FeatureEntityId',
        'joinId' => 'JoinId',
        'name' => 'Name',
        'projectName' => 'ProjectName',
        'requestId' => 'RequestId',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
