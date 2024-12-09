<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Tea\Model;

class GetAgentInstanceConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $config;

    /**
     * @var string
     */
    public $configMatcher;

    /**
     * @var string
     */
    public $configName;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $isGray;

    /**
     * @var int
     */
    public $lastModifyTime;
    protected $_name = [
        'config'         => 'config',
        'configMatcher'  => 'configMatcher',
        'configName'     => 'configName',
        'createTime'     => 'createTime',
        'isGray'         => 'isGray',
        'lastModifyTime' => 'lastModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->config) {
            $res['config'] = $this->config;
        }
        if (null !== $this->configMatcher) {
            $res['configMatcher'] = $this->configMatcher;
        }
        if (null !== $this->configName) {
            $res['configName'] = $this->configName;
        }
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }
        if (null !== $this->isGray) {
            $res['isGray'] = $this->isGray;
        }
        if (null !== $this->lastModifyTime) {
            $res['lastModifyTime'] = $this->lastModifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAgentInstanceConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['config'])) {
            $model->config = $map['config'];
        }
        if (isset($map['configMatcher'])) {
            $model->configMatcher = $map['configMatcher'];
        }
        if (isset($map['configName'])) {
            $model->configName = $map['configName'];
        }
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }
        if (isset($map['isGray'])) {
            $model->isGray = $map['isGray'];
        }
        if (isset($map['lastModifyTime'])) {
            $model->lastModifyTime = $map['lastModifyTime'];
        }

        return $model;
    }
}
