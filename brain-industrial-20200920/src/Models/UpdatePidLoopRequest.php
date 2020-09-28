<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Brainindustrial\V20200920\Models;

use AlibabaCloud\Tea\Model;

class UpdatePidLoopRequest extends Model
{
    /**
     * @var string
     */
    public $pidLoopId;

    /**
     * @var string
     */
    public $pidLoopName;

    /**
     * @var bool
     */
    public $crucial;

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
    protected $_name = [
        'pidLoopId'            => 'PidLoopId',
        'pidLoopName'          => 'PidLoopName',
        'crucial'              => 'Crucial',
        'pidLoopDesc'          => 'PidLoopDesc',
        'pidProjectId'         => 'PidProjectId',
        'pidLoopDcsType'       => 'PidLoopDcsType',
        'pidLoopType'          => 'PidLoopType',
        'pidLoopConfiguration' => 'PidLoopConfiguration',
    ];

    public function validate()
    {
        Model::validateRequired('pidLoopId', $this->pidLoopId, true);
        Model::validateRequired('pidLoopName', $this->pidLoopName, true);
        Model::validateRequired('crucial', $this->crucial, true);
        Model::validateRequired('pidProjectId', $this->pidProjectId, true);
        Model::validateRequired('pidLoopDcsType', $this->pidLoopDcsType, true);
        Model::validateRequired('pidLoopType', $this->pidLoopType, true);
        Model::validateRequired('pidLoopConfiguration', $this->pidLoopConfiguration, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pidLoopId) {
            $res['PidLoopId'] = $this->pidLoopId;
        }
        if (null !== $this->pidLoopName) {
            $res['PidLoopName'] = $this->pidLoopName;
        }
        if (null !== $this->crucial) {
            $res['Crucial'] = $this->crucial;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdatePidLoopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PidLoopId'])) {
            $model->pidLoopId = $map['PidLoopId'];
        }
        if (isset($map['PidLoopName'])) {
            $model->pidLoopName = $map['PidLoopName'];
        }
        if (isset($map['Crucial'])) {
            $model->crucial = $map['Crucial'];
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

        return $model;
    }
}
