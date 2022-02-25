<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class UploadAnalyzerRuntimeLogRequest extends Model
{
    /**
     * @description 日志内容
     *
     * @var string
     */
    public $content;

    /**
     * @description 扩展内容
     *
     * @var mixed[]
     */
    public $extendedContent;

    /**
     * @description 日志级别
     *
     * @var string
     */
    public $level;

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
    protected $_name = [
        'content'         => 'Content',
        'extendedContent' => 'ExtendedContent',
        'level'           => 'Level',
        'sourceIp'        => 'SourceIp',
        'taskId'          => 'TaskId',
        'token'           => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }
        if (null !== $this->extendedContent) {
            $res['ExtendedContent'] = $this->extendedContent;
        }
        if (null !== $this->level) {
            $res['Level'] = $this->level;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadAnalyzerRuntimeLogRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['ExtendedContent'])) {
            $model->extendedContent = $map['ExtendedContent'];
        }
        if (isset($map['Level'])) {
            $model->level = $map['Level'];
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

        return $model;
    }
}
