<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class UpdateScriptRequest extends Model
{
    /**
     * @var string
     */
    public $handleSuggestDesc;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $metricName;

    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $rootCauseDesc;

    /**
     * @var string
     */
    public $rootCausesLog;

    /**
     * @var string
     */
    public $sceneId;

    /**
     * @var string
     */
    public $script;

    /**
     * @var string
     */
    public $scriptLanguage;

    /**
     * @var string
     */
    public $scriptName;

    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'handleSuggestDesc' => 'HandleSuggestDesc',
        'id'                => 'Id',
        'metricName'        => 'MetricName',
        'operaUid'          => 'OperaUid',
        'productCode'       => 'ProductCode',
        'rootCauseDesc'     => 'RootCauseDesc',
        'rootCausesLog'     => 'RootCausesLog',
        'sceneId'           => 'SceneId',
        'script'            => 'Script',
        'scriptLanguage'    => 'ScriptLanguage',
        'scriptName'        => 'ScriptName',
        'status'            => 'Status',
        'type'              => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->handleSuggestDesc) {
            $res['HandleSuggestDesc'] = $this->handleSuggestDesc;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->metricName) {
            $res['MetricName'] = $this->metricName;
        }
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->rootCauseDesc) {
            $res['RootCauseDesc'] = $this->rootCauseDesc;
        }
        if (null !== $this->rootCausesLog) {
            $res['RootCausesLog'] = $this->rootCausesLog;
        }
        if (null !== $this->sceneId) {
            $res['SceneId'] = $this->sceneId;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->scriptLanguage) {
            $res['ScriptLanguage'] = $this->scriptLanguage;
        }
        if (null !== $this->scriptName) {
            $res['ScriptName'] = $this->scriptName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateScriptRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HandleSuggestDesc'])) {
            $model->handleSuggestDesc = $map['HandleSuggestDesc'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['MetricName'])) {
            $model->metricName = $map['MetricName'];
        }
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['RootCauseDesc'])) {
            $model->rootCauseDesc = $map['RootCauseDesc'];
        }
        if (isset($map['RootCausesLog'])) {
            $model->rootCausesLog = $map['RootCausesLog'];
        }
        if (isset($map['SceneId'])) {
            $model->sceneId = $map['SceneId'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['ScriptLanguage'])) {
            $model->scriptLanguage = $map['ScriptLanguage'];
        }
        if (isset($map['ScriptName'])) {
            $model->scriptName = $map['ScriptName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
