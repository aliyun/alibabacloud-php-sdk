<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\CopyAntChainContractProjectResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $projectDescription;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectVersion;

    /**
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'consortiumId'       => 'ConsortiumId',
        'createTime'         => 'CreateTime',
        'projectDescription' => 'ProjectDescription',
        'projectId'          => 'ProjectId',
        'projectName'        => 'ProjectName',
        'projectVersion'     => 'ProjectVersion',
        'updateTime'         => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->consortiumId) {
            $res['ConsortiumId'] = $this->consortiumId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectVersion) {
            $res['ProjectVersion'] = $this->projectVersion;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectVersion'])) {
            $model->projectVersion = $map['ProjectVersion'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
