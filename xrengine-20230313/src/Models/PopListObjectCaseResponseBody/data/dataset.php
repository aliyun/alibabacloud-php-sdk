<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListObjectCaseResponseBody\data;

use AlibabaCloud\SDK\XrEngine\V20230313\Models\PopListObjectCaseResponseBody\data\dataset\policy;
use AlibabaCloud\Tea\Model;

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
    public $createTime;

    /**
     * @var bool
     */
    public $deleted;

    /**
     * @var string
     */
    public $errorMessage;

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
    public $modifiedTime;

    /**
     * @var string
     */
    public $originResultUrl;

    /**
     * @var string
     */
    public $ossKey;

    /**
     * @var policy
     */
    public $policy;

    /**
     * @var string
     */
    public $poseUrl;

    /**
     * @var string
     */
    public $previewUrl;
    protected $_name = [
        'buildResultUrl'  => 'BuildResultUrl',
        'coverUrl'        => 'CoverUrl',
        'createTime'      => 'CreateTime',
        'deleted'         => 'Deleted',
        'errorMessage'    => 'ErrorMessage',
        'glbModelUrl'     => 'GlbModelUrl',
        'modelUrl'        => 'ModelUrl',
        'modifiedTime'    => 'ModifiedTime',
        'originResultUrl' => 'OriginResultUrl',
        'ossKey'          => 'OssKey',
        'policy'          => 'Policy',
        'poseUrl'         => 'PoseUrl',
        'previewUrl'      => 'PreviewUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->buildResultUrl) {
            $res['BuildResultUrl'] = $this->buildResultUrl;
        }
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deleted) {
            $res['Deleted'] = $this->deleted;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->glbModelUrl) {
            $res['GlbModelUrl'] = $this->glbModelUrl;
        }
        if (null !== $this->modelUrl) {
            $res['ModelUrl'] = $this->modelUrl;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->originResultUrl) {
            $res['OriginResultUrl'] = $this->originResultUrl;
        }
        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
        }
        if (null !== $this->policy) {
            $res['Policy'] = null !== $this->policy ? $this->policy->toMap() : null;
        }
        if (null !== $this->poseUrl) {
            $res['PoseUrl'] = $this->poseUrl;
        }
        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BuildResultUrl'])) {
            $model->buildResultUrl = $map['BuildResultUrl'];
        }
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Deleted'])) {
            $model->deleted = $map['Deleted'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['GlbModelUrl'])) {
            $model->glbModelUrl = $map['GlbModelUrl'];
        }
        if (isset($map['ModelUrl'])) {
            $model->modelUrl = $map['ModelUrl'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['OriginResultUrl'])) {
            $model->originResultUrl = $map['OriginResultUrl'];
        }
        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }
        if (isset($map['Policy'])) {
            $model->policy = policy::fromMap($map['Policy']);
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
