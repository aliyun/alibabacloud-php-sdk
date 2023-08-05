<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetInterceptionRuleDetailResponseBody\interceptionRuleDetail;

use AlibabaCloud\Tea\Model;

class srcTarget extends Model
{
    /**
     * @description The name of the application.
     *
     * @example console
     *
     * @var string
     */
    public $appName;

    /**
     * @description The images of the network object.
     *
     * @var string[]
     */
    public $imageList;

    /**
     * @description The namespace to which the network object belongs.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The type of the rule.
     *
     * @example customize
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The labels specified for the network object.
     *
     * @var string[]
     */
    public $tagList;

    /**
     * @description The ID of the network object.
     *
     * @example 300635
     *
     * @var int
     */
    public $targetId;

    /**
     * @description The name of the object.
     *
     * @example dmz
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the network object.
     *
     * @example IMAGE
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->imageList) {
            $res['ImageList'] = $this->imageList;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = $this->tagList;
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

    /**
     * @param array $map
     *
     * @return srcTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ImageList'])) {
            if (!empty($map['ImageList'])) {
                $model->imageList = $map['ImageList'];
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
                $model->tagList = $map['TagList'];
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
