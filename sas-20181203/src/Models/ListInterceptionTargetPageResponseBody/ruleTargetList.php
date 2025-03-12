<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListInterceptionTargetPageResponseBody;

use AlibabaCloud\Tea\Model;

class ruleTargetList extends Model
{
    /**
     * @description The name of the application of the network object.
     *
     * @example frontend
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the container cluster.
     *
     * @example c3e2eae03eb064d2ebf940cd5e1b17****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The name of the container cluster.
     *
     * @example sas-test-cnnf
     *
     * @var string
     */
    public $clusterName;

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
     * @description The type of the rule. Valid value:
     *
     *   customize: custom rule
     *
     * @example customize
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The tags specified for the network object.
     *
     * @var string[]
     */
    public $tagList;

    /**
     * @description The ID of the network object.
     *
     * > You can call the [ListInterceptionTargetPage](~~ListInterceptionTargetPage~~) operation to query the IDs of network objects.
     * @example 400914
     *
     * @var int
     */
    public $targetId;

    /**
     * @description The name of the network object.
     *
     * @example destination-test-obj-Na3cF
     *
     * @var string
     */
    public $targetName;

    /**
     * @description The type of the network object. Valid value:
     *
     *   IMAGE
     *
     * @example IMAGE
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'appName'     => 'AppName',
        'clusterId'   => 'ClusterId',
        'clusterName' => 'ClusterName',
        'imageList'   => 'ImageList',
        'namespace'   => 'Namespace',
        'ruleType'    => 'RuleType',
        'tagList'     => 'TagList',
        'targetId'    => 'TargetId',
        'targetName'  => 'TargetName',
        'targetType'  => 'TargetType',
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
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
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
     * @return ruleTargetList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
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
