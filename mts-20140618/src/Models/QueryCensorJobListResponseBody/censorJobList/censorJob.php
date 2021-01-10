<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\censorConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\censorPornResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\censorTerrorismResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\imageCensorResults;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryCensorJobListResponseBody\censorJobList\censorJob\input;
use AlibabaCloud\Tea\Model;

class censorJob extends Model
{
    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var censorTerrorismResult
     */
    public $censorTerrorismResult;

    /**
     * @var imageCensorResults
     */
    public $imageCensorResults;

    /**
     * @var string
     */
    public $titleCensorResult;

    /**
     * @var string
     */
    public $message;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $barrageCensorResult;

    /**
     * @var string
     */
    public $descCensorResult;

    /**
     * @var string
     */
    public $resultSaveObject;

    /**
     * @var censorConfig
     */
    public $censorConfig;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $code;

    /**
     * @var censorPornResult
     */
    public $censorPornResult;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'creationTime'          => 'CreationTime',
        'state'                 => 'State',
        'censorTerrorismResult' => 'CensorTerrorismResult',
        'imageCensorResults'    => 'ImageCensorResults',
        'titleCensorResult'     => 'TitleCensorResult',
        'message'               => 'Message',
        'input'                 => 'Input',
        'barrageCensorResult'   => 'BarrageCensorResult',
        'descCensorResult'      => 'DescCensorResult',
        'resultSaveObject'      => 'ResultSaveObject',
        'censorConfig'          => 'CensorConfig',
        'userData'              => 'UserData',
        'code'                  => 'Code',
        'censorPornResult'      => 'CensorPornResult',
        'pipelineId'            => 'PipelineId',
        'id'                    => 'Id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->censorTerrorismResult) {
            $res['CensorTerrorismResult'] = null !== $this->censorTerrorismResult ? $this->censorTerrorismResult->toMap() : null;
        }
        if (null !== $this->imageCensorResults) {
            $res['ImageCensorResults'] = null !== $this->imageCensorResults ? $this->imageCensorResults->toMap() : null;
        }
        if (null !== $this->titleCensorResult) {
            $res['TitleCensorResult'] = $this->titleCensorResult;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->barrageCensorResult) {
            $res['BarrageCensorResult'] = $this->barrageCensorResult;
        }
        if (null !== $this->descCensorResult) {
            $res['DescCensorResult'] = $this->descCensorResult;
        }
        if (null !== $this->resultSaveObject) {
            $res['ResultSaveObject'] = $this->resultSaveObject;
        }
        if (null !== $this->censorConfig) {
            $res['CensorConfig'] = null !== $this->censorConfig ? $this->censorConfig->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->censorPornResult) {
            $res['CensorPornResult'] = null !== $this->censorPornResult ? $this->censorPornResult->toMap() : null;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return censorJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['CensorTerrorismResult'])) {
            $model->censorTerrorismResult = censorTerrorismResult::fromMap($map['CensorTerrorismResult']);
        }
        if (isset($map['ImageCensorResults'])) {
            $model->imageCensorResults = imageCensorResults::fromMap($map['ImageCensorResults']);
        }
        if (isset($map['TitleCensorResult'])) {
            $model->titleCensorResult = $map['TitleCensorResult'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['BarrageCensorResult'])) {
            $model->barrageCensorResult = $map['BarrageCensorResult'];
        }
        if (isset($map['DescCensorResult'])) {
            $model->descCensorResult = $map['DescCensorResult'];
        }
        if (isset($map['ResultSaveObject'])) {
            $model->resultSaveObject = $map['ResultSaveObject'];
        }
        if (isset($map['CensorConfig'])) {
            $model->censorConfig = censorConfig::fromMap($map['CensorConfig']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CensorPornResult'])) {
            $model->censorPornResult = censorPornResult::fromMap($map['CensorPornResult']);
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
