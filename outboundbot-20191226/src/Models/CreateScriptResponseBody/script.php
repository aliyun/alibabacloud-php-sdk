<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\CreateScriptResponseBody;

use AlibabaCloud\Tea\Model;

class script extends Model
{
    /**
     * @example DRAFTED
     *
     * @var string
     */
    public $debugStatus;

    /**
     * @var string
     */
    public $industry;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDebugDrafted;

    /**
     * @example true
     *
     * @var bool
     */
    public $isDrafted;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $scriptDescription;

    /**
     * @example 8c58d3e0-bf27-4685-a5a5-65872ec5abc4
     *
     * @var string
     */
    public $scriptId;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @example DRAFTED
     *
     * @var string
     */
    public $status;

    /**
     * @example 1578474045152
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'debugStatus'       => 'DebugStatus',
        'industry'          => 'Industry',
        'isDebugDrafted'    => 'IsDebugDrafted',
        'isDrafted'         => 'IsDrafted',
        'scene'             => 'Scene',
        'scriptDescription' => 'ScriptDescription',
        'scriptId'          => 'ScriptId',
        'scriptName'        => 'ScriptName',
        'status'            => 'Status',
        'updateTime'        => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debugStatus) {
            $res['DebugStatus'] = $this->debugStatus;
        }
        if (null !== $this->industry) {
            $res['Industry'] = $this->industry;
        }
        if (null !== $this->isDebugDrafted) {
            $res['IsDebugDrafted'] = $this->isDebugDrafted;
        }
        if (null !== $this->isDrafted) {
            $res['IsDrafted'] = $this->isDrafted;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->scriptDescription) {
            $res['ScriptDescription'] = $this->scriptDescription;
        }
        if (null !== $this->scriptId) {
            $res['ScriptId'] = $this->scriptId;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return script
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DebugStatus'])) {
            $model->debugStatus = $map['DebugStatus'];
        }
        if (isset($map['Industry'])) {
            $model->industry = $map['Industry'];
        }
        if (isset($map['IsDebugDrafted'])) {
            $model->isDebugDrafted = $map['IsDebugDrafted'];
        }
        if (isset($map['IsDrafted'])) {
            $model->isDrafted = $map['IsDrafted'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['ScriptDescription'])) {
            $model->scriptDescription = $map['ScriptDescription'];
        }
        if (isset($map['ScriptId'])) {
            $model->scriptId = $map['ScriptId'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
