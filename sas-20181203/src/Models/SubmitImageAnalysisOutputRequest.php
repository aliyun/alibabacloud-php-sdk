<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class SubmitImageAnalysisOutputRequest extends Model
{
    /**
     * @description 等同 msgBody
     *
     * @var string
     */
    public $body;

    /**
     * @description 是否gzip压缩
     *
     * @var bool
     */
    public $isCompress;

    /**
     * @description 是否加密
     *
     * @var bool
     */
    public $isEncrypt;

    /**
     * @var string
     */
    public $sourceIp;

    /**
     * @description 任务 id
     *
     * @var string
     */
    public $taskId;

    /**
     * @description token
     *
     * @var string
     */
    public $token;

    /**
     * @description 等同 handler code
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'body'       => 'Body',
        'isCompress' => 'IsCompress',
        'isEncrypt'  => 'IsEncrypt',
        'sourceIp'   => 'SourceIp',
        'taskId'     => 'TaskId',
        'token'      => 'Token',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->isCompress) {
            $res['IsCompress'] = $this->isCompress;
        }
        if (null !== $this->isEncrypt) {
            $res['IsEncrypt'] = $this->isEncrypt;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitImageAnalysisOutputRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['IsCompress'])) {
            $model->isCompress = $map['IsCompress'];
        }
        if (isset($map['IsEncrypt'])) {
            $model->isEncrypt = $map['IsEncrypt'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
