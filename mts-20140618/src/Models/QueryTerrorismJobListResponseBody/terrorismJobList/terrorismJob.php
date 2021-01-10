<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList;

use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob\censorTerrorismResult;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob\input;
use AlibabaCloud\SDK\Mts\V20140618\Models\QueryTerrorismJobListResponseBody\terrorismJobList\terrorismJob\terrorismConfig;
use AlibabaCloud\Tea\Model;

class terrorismJob extends Model
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
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var censorTerrorismResult
     */
    public $censorTerrorismResult;

    /**
     * @var terrorismConfig
     */
    public $terrorismConfig;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var input
     */
    public $input;

    /**
     * @var string
     */
    public $id;
    protected $_name = [
        'creationTime'          => 'CreationTime',
        'state'                 => 'State',
        'userData'              => 'UserData',
        'code'                  => 'Code',
        'message'               => 'Message',
        'censorTerrorismResult' => 'CensorTerrorismResult',
        'terrorismConfig'       => 'TerrorismConfig',
        'pipelineId'            => 'PipelineId',
        'input'                 => 'Input',
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
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->censorTerrorismResult) {
            $res['CensorTerrorismResult'] = null !== $this->censorTerrorismResult ? $this->censorTerrorismResult->toMap() : null;
        }
        if (null !== $this->terrorismConfig) {
            $res['TerrorismConfig'] = null !== $this->terrorismConfig ? $this->terrorismConfig->toMap() : null;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->input) {
            $res['Input'] = null !== $this->input ? $this->input->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return terrorismJob
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
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['CensorTerrorismResult'])) {
            $model->censorTerrorismResult = censorTerrorismResult::fromMap($map['CensorTerrorismResult']);
        }
        if (isset($map['TerrorismConfig'])) {
            $model->terrorismConfig = terrorismConfig::fromMap($map['TerrorismConfig']);
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['Input'])) {
            $model->input = input::fromMap($map['Input']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        return $model;
    }
}
