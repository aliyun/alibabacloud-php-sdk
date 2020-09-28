<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class CreatePidLoopRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopName;

    /**
     * @var bool
     */
    public $isCrucialPidLoop;

    /**
     * @var string
     */
    public $pidLoopDesc;

    /**
     * @var string
     */
    public $pidProjectId;

    /**
     * @var string
     */
    public $pidLoopDcsType;

    /**
     * @var string
     */
    public $pidLoopType;

    /**
     * @var mixed[]
     */
    public $pidLoopConfiguration;

    /**
     * @var string
     */
    public $clientToken;
    protected $_name = [
        'pidLoopName'          => 'PidLoopName',
        'isCrucialPidLoop'     => 'IsCrucialPidLoop',
        'pidLoopDesc'          => 'PidLoopDesc',
        'pidProjectId'         => 'PidProjectId',
        'pidLoopDcsType'       => 'PidLoopDcsType',
        'pidLoopType'          => 'PidLoopType',
        'pidLoopConfiguration' => 'PidLoopConfiguration',
        'clientToken'          => 'ClientToken',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopName', $this->pidLoopName, true);
        Model::validateRequired('isCrucialPidLoop', $this->isCrucialPidLoop, true);
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidLoopDcsType', $this->pidLoopDcsType, true);
        Model::validateRequired('pidLoopType', $this->pidLoopType, true);
        Model::validateRequired('pidLoopConfiguration', $this->pidLoopConfiguration, true);
        Model::validateRequired('clientToken', $this->clientToken, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopName) {
            $res['PidLoopName'] = $this->pidLoopName;
        }
        if (null !== $this->isCrucialPidLoop) {
            $res['IsCrucialPidLoop'] = $this->isCrucialPidLoop;
        }
        if (null !== $this->pidLoopDesc) {
            $res['PidLoopDesc'] = $this->pidLoopDesc;
        }
        if (null !== $this->pidProjectId) {
            $res['PidProjectId'] = $this->pidProjectId;
        }
        if (null !== $this->pidLoopDcsType) {
            $res['PidLoopDcsType'] = $this->pidLoopDcsType;
        }
        if (null !== $this->pidLoopType) {
            $res['PidLoopType'] = $this->pidLoopType;
        }
        if (null !== $this->pidLoopConfiguration) {
            $res['PidLoopConfiguration'] = $this->pidLoopConfiguration;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreatePidLoopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopName'])) {
            $model->pidLoopName = $map['PidLoopName'];
        }
        if (isset($map['IsCrucialPidLoop'])) {
            $model->isCrucialPidLoop = $map['IsCrucialPidLoop'];
        }
        if (isset($map['PidLoopDesc'])) {
            $model->pidLoopDesc = $map['PidLoopDesc'];
        }
        if (isset($map['PidProjectId'])) {
            $model->pidProjectId = $map['PidProjectId'];
        }
        if (isset($map['PidLoopDcsType'])) {
            $model->pidLoopDcsType = $map['PidLoopDcsType'];
        }
        if (isset($map['PidLoopType'])) {
            $model->pidLoopType = $map['PidLoopType'];
        }
        if (isset($map['PidLoopConfiguration'])) {
            $model->pidLoopConfiguration = $map['PidLoopConfiguration'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        return $model;
    }
}
