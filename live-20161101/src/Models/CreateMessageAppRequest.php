<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Dara\Model;

class CreateMessageAppRequest extends Model
{
    /**
     * @var string[]
     */
    public $appConfig;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string[]
     */
    public $extension;
    protected $_name = [
        'appConfig' => 'AppConfig',
        'appName' => 'AppName',
        'extension' => 'Extension',
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

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->extension) {
            if (\is_array($this->extension)) {
                $res['Extension'] = [];
                foreach ($this->extension as $key1 => $value1) {
                    $res['Extension'][$key1] = $value1;
                }
            }
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

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Extension'])) {
            if (!empty($map['Extension'])) {
                $model->extension = [];
                foreach ($map['Extension'] as $key1 => $value1) {
                    $model->extension[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
