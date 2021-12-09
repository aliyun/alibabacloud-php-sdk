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
    public $barrageCensorResult;

    /**
     * @var censorConfig
     */
    public $censorConfig;

    /**
     * @var censorPornResult
     */
    public $censorPornResult;

    /**
     * @var censorTerrorismResult
     */
    public $censorTerrorismResult;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $descCensorResult;

    /**
     * @var string
     */
    public $id;

    /**
     * @var imageCensorResults
     */
    public $imageCensorResults;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $resultSaveObject;

    /**
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $titleCensorResult;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'barrageCensorResult'   => 'BarrageCensorResult',
        'censorConfig'          => 'CensorConfig',
        'censorPornResult'      => 'CensorPornResult',
        'censorTerrorismResult' => 'CensorTerrorismResult',
        'code'                  => 'Code',
        'creationTime'          => 'CreationTime',
        'descCensorResult'      => 'DescCensorResult',
        'id'                    => 'Id',
        'imageCensorResults'    => 'ImageCensorResults',
        'input'                 => 'Input',
        'message'               => 'Message',
        'pipelineId'            => 'PipelineId',
        'resultSaveObject'      => 'ResultSaveObject',
        'state'                 => 'State',
        'titleCensorResult'     => 'TitleCensorResult',
        'userData'              => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->barrageCensorResult) {
            $res['BarrageCensorResult'] = $this->barrageCensorResult;
        }
        if (null !== $this->censorConfig) {
            $res['CensorConfig'] = null !== $this->censorConfig ? $this->censorConfig->toMap() : null;
        }
        if (null !== $this->censorPornResult) {
            $res['CensorPornResult'] = null !== $this->censorPornResult ? $this->censorPornResult->toMap() : null;
        }
        if (null !== $this->censorTerrorismResult) {
            $res['CensorTerrorismResult'] = null !== $this->censorTerrorismResult ? $this->censorTerrorismResult->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->descCensorResult) {
            $res['DescCensorResult'] = $this->descCensorResult;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->imageCensorResults) {
            $res['ImageCensorResults'] = null !== $this->imageCensorResults ? $this->imageCensorResults->toMap() : null;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->resultSaveObject) {
            $res['ResultSaveObject'] = $this->resultSaveObject;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->titleCensorResult) {
            $res['TitleCensorResult'] = $this->titleCensorResult;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['BarrageCensorResult'])) {
            $model->barrageCensorResult = $map['BarrageCensorResult'];
        }
        if (isset($map['CensorConfig'])) {
            $model->censorConfig = censorConfig::fromMap($map['CensorConfig']);
        }
        if (isset($map['CensorPornResult'])) {
            $model->censorPornResult = censorPornResult::fromMap($map['CensorPornResult']);
        }
        if (isset($map['CensorTerrorismResult'])) {
            $model->censorTerrorismResult = censorTerrorismResult::fromMap($map['CensorTerrorismResult']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DescCensorResult'])) {
            $model->descCensorResult = $map['DescCensorResult'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ImageCensorResults'])) {
            $model->imageCensorResults = imageCensorResults::fromMap($map['ImageCensorResults']);
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['ResultSaveObject'])) {
            $model->resultSaveObject = $map['ResultSaveObject'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TitleCensorResult'])) {
            $model->titleCensorResult = $map['TitleCensorResult'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
