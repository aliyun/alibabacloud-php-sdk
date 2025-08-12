<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\ListMessageAppResponseBody\result;

use AlibabaCloud\Dara\Model;

class appList extends Model
{
    /**
     * @var string[]
     */
    public $appConfig;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $extension;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'appConfig' => 'AppConfig',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'createTime' => 'CreateTime',
        'extension' => 'Extension',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->appConfig)) {
            Model::validateArray($this->appConfig);
        }
        if (\is_array($this->extension)) {
            Model::validateArray($this->extension);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appConfig) {
            if (\is_array($this->appConfig)) {
                $res['AppConfig'] = [];
                foreach ($this->appConfig as $key1 => $value1) {
                    $res['AppConfig'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->extension) {
            if (\is_array($this->extension)) {
                $res['Extension'] = [];
                foreach ($this->extension as $key1 => $value1) {
                    $res['Extension'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AppConfig'])) {
            if (!empty($map['AppConfig'])) {
                $model->appConfig = [];
                foreach ($map['AppConfig'] as $key1 => $value1) {
                    $model->appConfig[$key1] = $value1;
                }
            }
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Extension'])) {
            if (!empty($map['Extension'])) {
                $model->extension = [];
                foreach ($map['Extension'] as $key1 => $value1) {
                    $model->extension[$key1] = $value1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
