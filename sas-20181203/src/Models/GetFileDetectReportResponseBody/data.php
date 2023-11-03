<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetFileDetectReportResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example {
     * }
     * @var string
     */
    public $basic;

    /**
     * @example c42b5f6bde0b730ece2923266333****
     *
     * @var string
     */
    public $fileHash;

    /**
     * @var string
     */
    public $filename;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasData;

    /**
     * @var string
     */
    public $intelligences;

    /**
     * @example {\"BehaviorData\": {}, \"ProcessData\": {}, \"SandboxData\": {}, \"AttackData\": [], \"NetworkData\": {}, \"SolutionData\": {}, \"FileData\": {}}
     *
     * @var string
     */
    public $sandbox;

    /**
     * @example true
     *
     * @var bool
     */
    public $showTab;

    /**
     * @example 2
     *
     * @var int
     */
    public $threatLevel;

    /**
     * @var string
     */
    public $threatTypes;
    protected $_name = [
        'basic'         => 'Basic',
        'fileHash'      => 'FileHash',
        'filename'      => 'Filename',
        'hasData'       => 'HasData',
        'intelligences' => 'Intelligences',
        'sandbox'       => 'Sandbox',
        'showTab'       => 'ShowTab',
        'threatLevel'   => 'ThreatLevel',
        'threatTypes'   => 'ThreatTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basic) {
            $res['Basic'] = $this->basic;
        }
        if (null !== $this->fileHash) {
            $res['FileHash'] = $this->fileHash;
        }
        if (null !== $this->filename) {
            $res['Filename'] = $this->filename;
        }
        if (null !== $this->hasData) {
            $res['HasData'] = $this->hasData;
        }
        if (null !== $this->intelligences) {
            $res['Intelligences'] = $this->intelligences;
        }
        if (null !== $this->sandbox) {
            $res['Sandbox'] = $this->sandbox;
        }
        if (null !== $this->showTab) {
            $res['ShowTab'] = $this->showTab;
        }
        if (null !== $this->threatLevel) {
            $res['ThreatLevel'] = $this->threatLevel;
        }
        if (null !== $this->threatTypes) {
            $res['ThreatTypes'] = $this->threatTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Basic'])) {
            $model->basic = $map['Basic'];
        }
        if (isset($map['FileHash'])) {
            $model->fileHash = $map['FileHash'];
        }
        if (isset($map['Filename'])) {
            $model->filename = $map['Filename'];
        }
        if (isset($map['HasData'])) {
            $model->hasData = $map['HasData'];
        }
        if (isset($map['Intelligences'])) {
            $model->intelligences = $map['Intelligences'];
        }
        if (isset($map['Sandbox'])) {
            $model->sandbox = $map['Sandbox'];
        }
        if (isset($map['ShowTab'])) {
            $model->showTab = $map['ShowTab'];
        }
        if (isset($map['ThreatLevel'])) {
            $model->threatLevel = $map['ThreatLevel'];
        }
        if (isset($map['ThreatTypes'])) {
            $model->threatTypes = $map['ThreatTypes'];
        }

        return $model;
    }
}
