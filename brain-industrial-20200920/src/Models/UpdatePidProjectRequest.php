<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class UpdatePidProjectRequest extends Model
{
    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $pidProjectName;

    /**
     * @var string
     */
    public $pidProjectDesc;

    /**
     * @var string
     */
    public $pidOrganisationId;
    protected $_name = [
        'pidProjectId'      => 'PidProjectId',
        'pidProjectName'    => 'PidProjectName',
        'pidProjectDesc'    => 'PidProjectDesc',
        'pidOrganisationId' => 'PidOrganisationId',
    ];

    public function validate()
    {
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidOrganisationId', $this->pidOrganisationId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidProjectName) {
            $res['PidProjectName'] = $this->pidProjectName;
        }
        if (null !== $this->pidProjectDesc) {
            $res['PidProjectDesc'] = $this->pidProjectDesc;
        }
        if (null !== $this->pidOrganisationId) {
            $res['PidOrganisationId'] = $this->pidOrganisationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePidProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidProjectName'])) {
            $model->pidProjectName = $map['PidProjectName'];
        }
        if (isset($map['PidProjectDesc'])) {
            $model->pidProjectDesc = $map['PidProjectDesc'];
        }
        if (isset($map['PidOrganisationId'])) {
            $model->pidOrganisationId = $map['PidOrganisationId'];
        }

        return $model;
    }
}
