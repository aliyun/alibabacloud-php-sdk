<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class CreatePidProjectRequest extends Model
{
    /**
     * @var string
     */
    public $pidProjectName;

    /**
     * @var string
     */
    public $pidOrganisationId;

    /**
     * @var string
     */
    public $pidProjectDesc;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'pidProjectName'    => 'PidProjectName',
        'pidOrganisationId' => 'PidOrganisationId',
        'pidProjectDesc'    => 'PidProjectDesc',
        'clientToken'       => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('pidProjectName', $this->pidProjectName, true);
        Model::validateRequired('pidOrganisationId', $this->pidOrganisationId, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidProjectName) {
            $res['PidProjectName'] = $this->pidProjectName;
        }
        if (null !== $this->pidOrganisationId) {
            $res['PidOrganisationId'] = $this->pidOrganisationId;
        }
        if (null !== $this->pidProjectDesc) {
            $res['PidProjectDesc'] = $this->pidProjectDesc;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePidProjectRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidProjectName'])) {
            $model->pidProjectName = $map['PidProjectName'];
        }
        if (isset($map['PidOrganisationId'])) {
            $model->pidOrganisationId = $map['PidOrganisationId'];
        }
        if (isset($map['PidProjectDesc'])) {
            $model->pidProjectDesc = $map['PidProjectDesc'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
