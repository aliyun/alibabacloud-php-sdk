<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models;

use AlibabaCloud\Dara\Model;

class CreateJobFileRequest extends Model
{
    /**
     * @var bool
     */
    public $async;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var string
     */
    public $runasUser;

    /**
     * @var string
     */
    public $runasUserPassword;

    /**
     * @var string
     */
    public $targetFile;
    protected $_name = [
        'async' => 'Async',
        'clusterId' => 'ClusterId',
        'content' => 'Content',
        'runasUser' => 'RunasUser',
        'runasUserPassword' => 'RunasUserPassword',
        'targetFile' => 'TargetFile',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->async) {
            $res['Async'] = $this->async;
        }

        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->runasUser) {
            $res['RunasUser'] = $this->runasUser;
        }

        if (null !== $this->runasUserPassword) {
            $res['RunasUserPassword'] = $this->runasUserPassword;
        }

        if (null !== $this->targetFile) {
            $res['TargetFile'] = $this->targetFile;
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
        if (isset($map['Async'])) {
            $model->async = $map['Async'];
        }

        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['RunasUser'])) {
            $model->runasUser = $map['RunasUser'];
        }

        if (isset($map['RunasUserPassword'])) {
            $model->runasUserPassword = $map['RunasUserPassword'];
        }

        if (isset($map['TargetFile'])) {
            $model->targetFile = $map['TargetFile'];
        }

        return $model;
    }
}
