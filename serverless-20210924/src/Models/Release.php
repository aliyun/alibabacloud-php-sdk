<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Serverless\V20210924\Models;

use AlibabaCloud\SDK\Serverless\V20210924\Models\Release\codeVersion;
use AlibabaCloud\Tea\Model;

class Release extends Model
{
    /**
     * @var mixed[]
     */
    public $appConfig;

    /**
     * @var codeVersion
     */
    public $codeVersion;

    /**
     * @var string
     */
    public $createdTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var mixed[]
     */
    public $output;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $versionId;
    protected $_name = [
        'appConfig'   => 'appConfig',
        'codeVersion' => 'codeVersion',
        'createdTime' => 'createdTime',
        'description' => 'description',
        'output'      => 'output',
        'status'      => 'status',
        'versionId'   => 'versionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appConfig) {
            $res['appConfig'] = $this->appConfig;
        }
        if (null !== $this->codeVersion) {
            $res['codeVersion'] = null !== $this->codeVersion ? $this->codeVersion->toMap() : null;
        }
        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->output) {
            $res['output'] = $this->output;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->versionId) {
            $res['versionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Release
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['appConfig'])) {
            $model->appConfig = $map['appConfig'];
        }
        if (isset($map['codeVersion'])) {
            $model->codeVersion = codeVersion::fromMap($map['codeVersion']);
        }
        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['output'])) {
            $model->output = $map['output'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }
        if (isset($map['versionId'])) {
            $model->versionId = $map['versionId'];
        }

        return $model;
    }
}
