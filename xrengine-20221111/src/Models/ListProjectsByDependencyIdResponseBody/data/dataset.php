<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20221111\Models\ListProjectsByDependencyIdResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataset extends Model
{
    /**
     * @var mixed[]
     */
    public $buildResultUrl;

    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $glbModelUrl;

    /**
     * @var string
     */
    public $modelUrl;

    /**
     * @var string
     */
    public $originResultUrl;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var string
     */
    public $poseUrl;

    /**
     * @var string
     */
    public $previewUrl;
    protected $_name = [
        'buildResultUrl' => 'BuildResultUrl',
        'coverUrl' => 'CoverUrl',
        'glbModelUrl' => 'GlbModelUrl',
        'modelUrl' => 'ModelUrl',
        'originResultUrl' => 'OriginResultUrl',
        'ossKey' => 'OssKey',
        'poseUrl' => 'PoseUrl',
        'previewUrl' => 'PreviewUrl',
    ];

    public function validate()
    {
        if (\is_array($this->buildResultUrl)) {
            Model::validateArray($this->buildResultUrl);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->buildResultUrl) {
            if (\is_array($this->buildResultUrl)) {
                $res['BuildResultUrl'] = [];
                foreach ($this->buildResultUrl as $key1 => $value1) {
                    $res['BuildResultUrl'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }

        if (null !== $this->glbModelUrl) {
            $res['GlbModelUrl'] = $this->glbModelUrl;
        }

        if (null !== $this->modelUrl) {
            $res['ModelUrl'] = $this->modelUrl;
        }

        if (null !== $this->originResultUrl) {
            $res['OriginResultUrl'] = $this->originResultUrl;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }

        if (null !== $this->poseUrl) {
            $res['PoseUrl'] = $this->poseUrl;
        }

        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
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
        if (isset($map['BuildResultUrl'])) {
            if (!empty($map['BuildResultUrl'])) {
                $model->buildResultUrl = [];
                foreach ($map['BuildResultUrl'] as $key1 => $value1) {
                    $model->buildResultUrl[$key1] = $value1;
                }
            }
        }

        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }

        if (isset($map['GlbModelUrl'])) {
            $model->glbModelUrl = $map['GlbModelUrl'];
        }

        if (isset($map['ModelUrl'])) {
            $model->modelUrl = $map['ModelUrl'];
        }

        if (isset($map['OriginResultUrl'])) {
            $model->originResultUrl = $map['OriginResultUrl'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        if (isset($map['PoseUrl'])) {
            $model->poseUrl = $map['PoseUrl'];
        }

        if (isset($map['PreviewUrl'])) {
            $model->previewUrl = $map['PreviewUrl'];
        }

        return $model;
    }
}
