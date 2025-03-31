<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models;

use AlibabaCloud\Dara\Model;

class CreateArtifactSubscriptionRuleRequest extends Model
{
    /**
     * @var bool
     */
    public $accelerate;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $namespaceName;

    /**
     * @var bool
     */
    public $override;

    /**
     * @var string[]
     */
    public $platform;

    /**
     * @var string
     */
    public $repoName;

    /**
     * @var string
     */
    public $sourceNamespaceName;

    /**
     * @var string
     */
    public $sourceProvider;

    /**
     * @var string
     */
    public $sourceRepoName;

    /**
     * @var int
     */
    public $tagCount;

    /**
     * @var string
     */
    public $tagRegexp;
    protected $_name = [
        'accelerate' => 'Accelerate',
        'instanceId' => 'InstanceId',
        'namespaceName' => 'NamespaceName',
        'override' => 'Override',
        'platform' => 'Platform',
        'repoName' => 'RepoName',
        'sourceNamespaceName' => 'SourceNamespaceName',
        'sourceProvider' => 'SourceProvider',
        'sourceRepoName' => 'SourceRepoName',
        'tagCount' => 'TagCount',
        'tagRegexp' => 'TagRegexp',
    ];

    public function validate()
    {
        if (\is_array($this->platform)) {
            Model::validateArray($this->platform);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accelerate) {
            $res['Accelerate'] = $this->accelerate;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->namespaceName) {
            $res['NamespaceName'] = $this->namespaceName;
        }

        if (null !== $this->override) {
            $res['Override'] = $this->override;
        }

        if (null !== $this->platform) {
            if (\is_array($this->platform)) {
                $res['Platform'] = [];
                $n1 = 0;
                foreach ($this->platform as $item1) {
                    $res['Platform'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->repoName) {
            $res['RepoName'] = $this->repoName;
        }

        if (null !== $this->sourceNamespaceName) {
            $res['SourceNamespaceName'] = $this->sourceNamespaceName;
        }

        if (null !== $this->sourceProvider) {
            $res['SourceProvider'] = $this->sourceProvider;
        }

        if (null !== $this->sourceRepoName) {
            $res['SourceRepoName'] = $this->sourceRepoName;
        }

        if (null !== $this->tagCount) {
            $res['TagCount'] = $this->tagCount;
        }

        if (null !== $this->tagRegexp) {
            $res['TagRegexp'] = $this->tagRegexp;
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
        if (isset($map['Accelerate'])) {
            $model->accelerate = $map['Accelerate'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['NamespaceName'])) {
            $model->namespaceName = $map['NamespaceName'];
        }

        if (isset($map['Override'])) {
            $model->override = $map['Override'];
        }

        if (isset($map['Platform'])) {
            if (!empty($map['Platform'])) {
                $model->platform = [];
                $n1 = 0;
                foreach ($map['Platform'] as $item1) {
                    $model->platform[$n1++] = $item1;
                }
            }
        }

        if (isset($map['RepoName'])) {
            $model->repoName = $map['RepoName'];
        }

        if (isset($map['SourceNamespaceName'])) {
            $model->sourceNamespaceName = $map['SourceNamespaceName'];
        }

        if (isset($map['SourceProvider'])) {
            $model->sourceProvider = $map['SourceProvider'];
        }

        if (isset($map['SourceRepoName'])) {
            $model->sourceRepoName = $map['SourceRepoName'];
        }

        if (isset($map['TagCount'])) {
            $model->tagCount = $map['TagCount'];
        }

        if (isset($map['TagRegexp'])) {
            $model->tagRegexp = $map['TagRegexp'];
        }

        return $model;
    }
}
