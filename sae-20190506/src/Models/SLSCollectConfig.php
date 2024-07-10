<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models;

use AlibabaCloud\Tea\Model;

class SLSCollectConfig extends Model
{
    /**
     * @var string
     */
    public $logPath;

    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $logstoreName;

    /**
     * @var string
     */
    public $logtailName;

    /**
     * @var string
     */
    public $machineGroup;

    /**
     * @var string
     */
    public $projectName;
    protected $_name = [
        'logPath'      => 'LogPath',
        'logType'      => 'LogType',
        'logstoreName' => 'LogstoreName',
        'logtailName'  => 'LogtailName',
        'machineGroup' => 'MachineGroup',
        'projectName'  => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logPath) {
            $res['LogPath'] = $this->logPath;
        }
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }
        if (null !== $this->logstoreName) {
            $res['LogstoreName'] = $this->logstoreName;
        }
        if (null !== $this->logtailName) {
            $res['LogtailName'] = $this->logtailName;
        }
        if (null !== $this->machineGroup) {
            $res['MachineGroup'] = $this->machineGroup;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SLSCollectConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogPath'])) {
            $model->logPath = $map['LogPath'];
        }
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }
        if (isset($map['LogstoreName'])) {
            $model->logstoreName = $map['LogstoreName'];
        }
        if (isset($map['LogtailName'])) {
            $model->logtailName = $map['LogtailName'];
        }
        if (isset($map['MachineGroup'])) {
            $model->machineGroup = $map['MachineGroup'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
