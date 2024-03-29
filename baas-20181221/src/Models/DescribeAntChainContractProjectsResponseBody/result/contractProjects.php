<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models\DescribeAntChainContractProjectsResponseBody\result;

use AlibabaCloud\Tea\Model;

class contractProjects extends Model
{
    /**
     * @example DV80nJXq
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example 1562847564000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example description
     *
     * @var string
     */
    public $projectDescription;

    /**
     * @example 2L9VK68g
     *
     * @var string
     */
    public $projectId;

    /**
     * @example projectname
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 5
     *
     * @var string
     */
    public $projectVersion;

    /**
     * @example 1563954499000
     *
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
     * @return contractProjects
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
