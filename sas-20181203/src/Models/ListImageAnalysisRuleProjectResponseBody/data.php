<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListImageAnalysisRuleProjectResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description 规则内容
     *
     * @var string
     */
    public $content;

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
     * @description 规则名称
     *
     * @var string
     */
    public $name;

    /**
     * @description 输出配置
     *
     * @var string
     */
    public $outputConfig;

    /**
     * @description 处理handler
     *
     * @var string
     */
    public $outputHandler;

    /**
     * @description 项目名称
     *
     * @var string
     */
    public $project;

    /**
     * @description 规则状态
     *
     * @var int
     */
    public $status;

    /**
     * @description 规则版本
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'content'       => 'Content',
        'isCompress'    => 'IsCompress',
        'isEncrypt'     => 'IsEncrypt',
        'name'          => 'Name',
        'outputConfig'  => 'OutputConfig',
        'outputHandler' => 'OutputHandler',
        'project'       => 'Project',
        'status'        => 'Status',
        'version'       => 'Version',
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
        if (null !== $this->isCompress) {
            $res['IsCompress'] = $this->isCompress;
        }
        if (null !== $this->isEncrypt) {
            $res['IsEncrypt'] = $this->isEncrypt;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->outputConfig) {
            $res['OutputConfig'] = $this->outputConfig;
        }
        if (null !== $this->outputHandler) {
            $res['OutputHandler'] = $this->outputHandler;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }
        if (isset($map['IsCompress'])) {
            $model->isCompress = $map['IsCompress'];
        }
        if (isset($map['IsEncrypt'])) {
            $model->isEncrypt = $map['IsEncrypt'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OutputConfig'])) {
            $model->outputConfig = $map['OutputConfig'];
        }
        if (isset($map['OutputHandler'])) {
            $model->outputHandler = $map['OutputHandler'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
