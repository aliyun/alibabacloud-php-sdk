<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emasappmonitor\V20190611\Models\GetIssueResponseBody;

use AlibabaCloud\Dara\Model;

class model_ extends Model
{
    /**
     * @var string[]
     */
    public $affectedVersions;
    /**
     * @var string
     */
    public $cruxStack;
    /**
     * @var string
     */
    public $digestHash;
    /**
     * @var int
     */
    public $errorColumn;
    /**
     * @var int
     */
    public $errorCount;
    /**
     * @var float
     */
    public $errorCountGrowthRate;
    /**
     * @var int
     */
    public $errorDeviceCount;
    /**
     * @var float
     */
    public $errorDeviceCountGrowthRate;
    /**
     * @var float
     */
    public $errorDeviceRate;
    /**
     * @var float
     */
    public $errorDeviceRateGrowthRate;
    /**
     * @var string
     */
    public $errorFileName;
    /**
     * @var string
     */
    public $errorLine;
    /**
     * @var string
     */
    public $errorName;
    /**
     * @var float
     */
    public $errorRate;
    /**
     * @var float
     */
    public $errorRateGrowthRate;
    /**
     * @var string
     */
    public $errorType;
    /**
     * @var string
     */
    public $firstVersion;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var int
     */
    public $gmtLatest;
    /**
     * @var int
     */
    public $keyLine;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $stack;
    /**
     * @var int
     */
    public $status;
    /**
     * @var string
     */
    public $summary;
    /**
     * @var bool
     */
    public $symbolicStatus;
    /**
     * @var string[]
     */
    public $tags;
    protected $_name = [
        'affectedVersions'           => 'AffectedVersions',
        'cruxStack'                  => 'CruxStack',
        'digestHash'                 => 'DigestHash',
        'errorColumn'                => 'ErrorColumn',
        'errorCount'                 => 'ErrorCount',
        'errorCountGrowthRate'       => 'ErrorCountGrowthRate',
        'errorDeviceCount'           => 'ErrorDeviceCount',
        'errorDeviceCountGrowthRate' => 'ErrorDeviceCountGrowthRate',
        'errorDeviceRate'            => 'ErrorDeviceRate',
        'errorDeviceRateGrowthRate'  => 'ErrorDeviceRateGrowthRate',
        'errorFileName'              => 'ErrorFileName',
        'errorLine'                  => 'ErrorLine',
        'errorName'                  => 'ErrorName',
        'errorRate'                  => 'ErrorRate',
        'errorRateGrowthRate'        => 'ErrorRateGrowthRate',
        'errorType'                  => 'ErrorType',
        'firstVersion'               => 'FirstVersion',
        'gmtCreate'                  => 'GmtCreate',
        'gmtLatest'                  => 'GmtLatest',
        'keyLine'                    => 'KeyLine',
        'name'                       => 'Name',
        'stack'                      => 'Stack',
        'status'                     => 'Status',
        'summary'                    => 'Summary',
        'symbolicStatus'             => 'SymbolicStatus',
        'tags'                       => 'Tags',
    ];

    public function validate()
    {
        if (\is_array($this->affectedVersions)) {
            Model::validateArray($this->affectedVersions);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->affectedVersions) {
            if (\is_array($this->affectedVersions)) {
                $res['AffectedVersions'] = [];
                $n1                      = 0;
                foreach ($this->affectedVersions as $item1) {
                    $res['AffectedVersions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->cruxStack) {
            $res['CruxStack'] = $this->cruxStack;
        }

        if (null !== $this->digestHash) {
            $res['DigestHash'] = $this->digestHash;
        }

        if (null !== $this->errorColumn) {
            $res['ErrorColumn'] = $this->errorColumn;
        }

        if (null !== $this->errorCount) {
            $res['ErrorCount'] = $this->errorCount;
        }

        if (null !== $this->errorCountGrowthRate) {
            $res['ErrorCountGrowthRate'] = $this->errorCountGrowthRate;
        }

        if (null !== $this->errorDeviceCount) {
            $res['ErrorDeviceCount'] = $this->errorDeviceCount;
        }

        if (null !== $this->errorDeviceCountGrowthRate) {
            $res['ErrorDeviceCountGrowthRate'] = $this->errorDeviceCountGrowthRate;
        }

        if (null !== $this->errorDeviceRate) {
            $res['ErrorDeviceRate'] = $this->errorDeviceRate;
        }

        if (null !== $this->errorDeviceRateGrowthRate) {
            $res['ErrorDeviceRateGrowthRate'] = $this->errorDeviceRateGrowthRate;
        }

        if (null !== $this->errorFileName) {
            $res['ErrorFileName'] = $this->errorFileName;
        }

        if (null !== $this->errorLine) {
            $res['ErrorLine'] = $this->errorLine;
        }

        if (null !== $this->errorName) {
            $res['ErrorName'] = $this->errorName;
        }

        if (null !== $this->errorRate) {
            $res['ErrorRate'] = $this->errorRate;
        }

        if (null !== $this->errorRateGrowthRate) {
            $res['ErrorRateGrowthRate'] = $this->errorRateGrowthRate;
        }

        if (null !== $this->errorType) {
            $res['ErrorType'] = $this->errorType;
        }

        if (null !== $this->firstVersion) {
            $res['FirstVersion'] = $this->firstVersion;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtLatest) {
            $res['GmtLatest'] = $this->gmtLatest;
        }

        if (null !== $this->keyLine) {
            $res['KeyLine'] = $this->keyLine;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->stack) {
            $res['Stack'] = $this->stack;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        if (null !== $this->symbolicStatus) {
            $res['SymbolicStatus'] = $this->symbolicStatus;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1          = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AffectedVersions'])) {
            if (!empty($map['AffectedVersions'])) {
                $model->affectedVersions = [];
                $n1                      = 0;
                foreach ($map['AffectedVersions'] as $item1) {
                    $model->affectedVersions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['CruxStack'])) {
            $model->cruxStack = $map['CruxStack'];
        }

        if (isset($map['DigestHash'])) {
            $model->digestHash = $map['DigestHash'];
        }

        if (isset($map['ErrorColumn'])) {
            $model->errorColumn = $map['ErrorColumn'];
        }

        if (isset($map['ErrorCount'])) {
            $model->errorCount = $map['ErrorCount'];
        }

        if (isset($map['ErrorCountGrowthRate'])) {
            $model->errorCountGrowthRate = $map['ErrorCountGrowthRate'];
        }

        if (isset($map['ErrorDeviceCount'])) {
            $model->errorDeviceCount = $map['ErrorDeviceCount'];
        }

        if (isset($map['ErrorDeviceCountGrowthRate'])) {
            $model->errorDeviceCountGrowthRate = $map['ErrorDeviceCountGrowthRate'];
        }

        if (isset($map['ErrorDeviceRate'])) {
            $model->errorDeviceRate = $map['ErrorDeviceRate'];
        }

        if (isset($map['ErrorDeviceRateGrowthRate'])) {
            $model->errorDeviceRateGrowthRate = $map['ErrorDeviceRateGrowthRate'];
        }

        if (isset($map['ErrorFileName'])) {
            $model->errorFileName = $map['ErrorFileName'];
        }

        if (isset($map['ErrorLine'])) {
            $model->errorLine = $map['ErrorLine'];
        }

        if (isset($map['ErrorName'])) {
            $model->errorName = $map['ErrorName'];
        }

        if (isset($map['ErrorRate'])) {
            $model->errorRate = $map['ErrorRate'];
        }

        if (isset($map['ErrorRateGrowthRate'])) {
            $model->errorRateGrowthRate = $map['ErrorRateGrowthRate'];
        }

        if (isset($map['ErrorType'])) {
            $model->errorType = $map['ErrorType'];
        }

        if (isset($map['FirstVersion'])) {
            $model->firstVersion = $map['FirstVersion'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtLatest'])) {
            $model->gmtLatest = $map['GmtLatest'];
        }

        if (isset($map['KeyLine'])) {
            $model->keyLine = $map['KeyLine'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['Stack'])) {
            $model->stack = $map['Stack'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        if (isset($map['SymbolicStatus'])) {
            $model->symbolicStatus = $map['SymbolicStatus'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1          = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
