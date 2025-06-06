<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployModelScopeModelInput;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devs\V20230714\Models\ModelConfig;

class modelConfig extends Model
{
    /**
     * @var string
     */
    public $framework;

    /**
     * @var ModelConfig[]
     */
    public $multiModelConfig;

    /**
     * @var string
     */
    public $prefix;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $srcModelScopeModelID;

    /**
     * @var string
     */
    public $srcModelScopeModelRevision;

    /**
     * @var string
     */
    public $srcModelScopeToken;

    /**
     * @var string
     */
    public $srcOssBucket;

    /**
     * @var string
     */
    public $srcOssPath;

    /**
     * @var string
     */
    public $srcOssRegion;

    /**
     * @var string
     */
    public $syncStrategy;
    protected $_name = [
        'framework' => 'framework',
        'multiModelConfig' => 'multiModelConfig',
        'prefix' => 'prefix',
        'sourceType' => 'sourceType',
        'srcModelScopeModelID' => 'srcModelScopeModelID',
        'srcModelScopeModelRevision' => 'srcModelScopeModelRevision',
        'srcModelScopeToken' => 'srcModelScopeToken',
        'srcOssBucket' => 'srcOssBucket',
        'srcOssPath' => 'srcOssPath',
        'srcOssRegion' => 'srcOssRegion',
        'syncStrategy' => 'syncStrategy',
    ];

    public function validate()
    {
        if (\is_array($this->multiModelConfig)) {
            Model::validateArray($this->multiModelConfig);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->framework) {
            $res['framework'] = $this->framework;
        }

        if (null !== $this->multiModelConfig) {
            if (\is_array($this->multiModelConfig)) {
                $res['multiModelConfig'] = [];
                $n1 = 0;
                foreach ($this->multiModelConfig as $item1) {
                    $res['multiModelConfig'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->prefix) {
            $res['prefix'] = $this->prefix;
        }

        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        if (null !== $this->srcModelScopeModelID) {
            $res['srcModelScopeModelID'] = $this->srcModelScopeModelID;
        }

        if (null !== $this->srcModelScopeModelRevision) {
            $res['srcModelScopeModelRevision'] = $this->srcModelScopeModelRevision;
        }

        if (null !== $this->srcModelScopeToken) {
            $res['srcModelScopeToken'] = $this->srcModelScopeToken;
        }

        if (null !== $this->srcOssBucket) {
            $res['srcOssBucket'] = $this->srcOssBucket;
        }

        if (null !== $this->srcOssPath) {
            $res['srcOssPath'] = $this->srcOssPath;
        }

        if (null !== $this->srcOssRegion) {
            $res['srcOssRegion'] = $this->srcOssRegion;
        }

        if (null !== $this->syncStrategy) {
            $res['syncStrategy'] = $this->syncStrategy;
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
        if (isset($map['framework'])) {
            $model->framework = $map['framework'];
        }

        if (isset($map['multiModelConfig'])) {
            if (!empty($map['multiModelConfig'])) {
                $model->multiModelConfig = [];
                $n1 = 0;
                foreach ($map['multiModelConfig'] as $item1) {
                    $model->multiModelConfig[$n1++] = self::fromMap($item1);
                }
            }
        }

        if (isset($map['prefix'])) {
            $model->prefix = $map['prefix'];
        }

        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        if (isset($map['srcModelScopeModelID'])) {
            $model->srcModelScopeModelID = $map['srcModelScopeModelID'];
        }

        if (isset($map['srcModelScopeModelRevision'])) {
            $model->srcModelScopeModelRevision = $map['srcModelScopeModelRevision'];
        }

        if (isset($map['srcModelScopeToken'])) {
            $model->srcModelScopeToken = $map['srcModelScopeToken'];
        }

        if (isset($map['srcOssBucket'])) {
            $model->srcOssBucket = $map['srcOssBucket'];
        }

        if (isset($map['srcOssPath'])) {
            $model->srcOssPath = $map['srcOssPath'];
        }

        if (isset($map['srcOssRegion'])) {
            $model->srcOssRegion = $map['srcOssRegion'];
        }

        if (isset($map['syncStrategy'])) {
            $model->syncStrategy = $map['syncStrategy'];
        }

        return $model;
    }
}
