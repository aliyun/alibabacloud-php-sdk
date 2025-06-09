<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class GetAgentInstanceConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $attributes;

    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $configType;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string[][]
     */
    public $grayConfigs;

    /**
     * @var int
     */
    public $lastModifyTime;
    protected $_name = [
        'attributes' => 'attributes',
        'config' => 'config',
        'configType' => 'configType',
        'createTime' => 'createTime',
        'grayConfigs' => 'grayConfigs',
        'lastModifyTime' => 'lastModifyTime',
    ];

    public function validate()
    {
        if (\is_array($this->grayConfigs)) {
            Model::validateArray($this->grayConfigs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->configType) {
            $res['configType'] = $this->configType;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->grayConfigs) {
            if (\is_array($this->grayConfigs)) {
                $res['grayConfigs'] = [];
                $n1 = 0;
                foreach ($this->grayConfigs as $item1) {
                    if (\is_array($item1)) {
                        $res['grayConfigs'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['grayConfigs'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
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
        if (isset($map['attributes'])) {
            $model->attributes = $map['attributes'];
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['configType'])) {
            $model->configType = $map['configType'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['grayConfigs'])) {
            if (!empty($map['grayConfigs'])) {
                $model->grayConfigs = [];
                $n1 = 0;
                foreach ($map['grayConfigs'] as $item1) {
                    if (!empty($item1)) {
                        $model->grayConfigs[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->grayConfigs[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }

        return $model;
    }
}
