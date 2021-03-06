<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class CreateAntChainContractProjectRequest extends Model
{
    /**
     * @var string
     */
    public $consortiumId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectVersion;

    /**
     * @var string
     */
    public $projectDescription;
    protected $_name = [
        'consortiumId'       => 'ConsortiumId',
        'projectName'        => 'ProjectName',
        'projectVersion'     => 'ProjectVersion',
        'projectDescription' => 'ProjectDescription',
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectVersion) {
            $res['ProjectVersion'] = $this->projectVersion;
        }
        if (null !== $this->projectDescription) {
            $res['ProjectDescription'] = $this->projectDescription;
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectVersion'])) {
            $model->projectVersion = $map['ProjectVersion'];
        }
        if (isset($map['ProjectDescription'])) {
            $model->projectDescription = $map['ProjectDescription'];
        }

        return $model;
    }
}
