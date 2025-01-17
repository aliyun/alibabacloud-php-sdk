<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionRuleDetailResponseBody\interceptionRuleDetail;

use AlibabaCloud\Dara\Model;

class srcTarget extends Model
{
    /**
     * @var string
     */
    public $appName;
    /**
     * @var string[]
     */
    public $imageList;
    /**
     * @var string
     */
    public $namespace;
    /**
     * @var string
     */
    public $ruleType;
    /**
     * @var string[]
     */
    public $tagList;
    /**
     * @var int
     */
    public $targetId;
    /**
     * @var string
     */
    public $targetName;
    /**
     * @var string
     */
    public $targetType;
    protected $_name = [
        'appName'    => 'AppName',
        'imageList'  => 'ImageList',
        'namespace'  => 'Namespace',
        'ruleType'   => 'RuleType',
        'tagList'    => 'TagList',
        'targetId'   => 'TargetId',
        'targetName' => 'TargetName',
        'targetType' => 'TargetType',
    ];

    public function validate()
    {
        if (\is_array($this->imageList)) {
            Model::validateArray($this->imageList);
        }
        if (\is_array($this->tagList)) {
            Model::validateArray($this->tagList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->imageList) {
            if (\is_array($this->imageList)) {
                $res['ImageList'] = [];
                $n1               = 0;
                foreach ($this->imageList as $item1) {
                    $res['ImageList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }

        if (null !== $this->tagList) {
            if (\is_array($this->tagList)) {
                $res['TagList'] = [];
                $n1             = 0;
                foreach ($this->tagList as $item1) {
                    $res['TagList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->targetId) {
            $res['TargetId'] = $this->targetId;
        }

        if (null !== $this->targetName) {
            $res['TargetName'] = $this->targetName;
        }

        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
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
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = [];
                $n1               = 0;
                foreach ($map['ImageList'] as $item1) {
                    $model->imageList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }

        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n1             = 0;
                foreach ($map['TagList'] as $item1) {
                    $model->tagList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TargetId'])) {
            $model->targetId = $map['TargetId'];
        }

        if (isset($map['TargetName'])) {
            $model->targetName = $map['TargetName'];
        }

        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
