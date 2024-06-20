<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainContractProjectRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example DV80nJXq
     *
     * @var string
     */
    public $consortiumId;

    /**
     * @example project description
     *
     * @var string
     */
    public $projectDescription;

    /**
     * @description This parameter is required.
     *
     * @example projectname
     *
     * @var string
     */
    public $projectName;

    /**
     * @description This parameter is required.
     *
     * @example v1.0.0
     *
     * @var string
     */
    public $projectVersion;
    protected $_name = [
        'consortiumId'       => 'ConsortiumId',
        'projectDescription' => 'ProjectDescription',
        'projectName'        => 'ProjectName',
        'projectVersion'     => 'ProjectVersion',
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
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectVersion) {
            $res['ProjectVersion'] = $this->projectVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAntChainContractProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsortiumId'])) {
            $model->consortiumId = $map['ConsortiumId'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectVersion'])) {
            $model->projectVersion = $map['ProjectVersion'];
        }

        return $model;
    }
}
