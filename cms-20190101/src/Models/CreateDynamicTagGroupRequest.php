<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest\matchExpress;
use AlibabaCloud\Tea\Model;

class CreateDynamicTagGroupRequest extends Model
{
    /**
     * @description The relationship between the conditional expressions for the tag values of the cloud resources. Valid values:
     *
     *   and (default)
     *   or
     *
     * @example ECS_Group
     *
     * @var string[]
     */
    public $contactGroupList;

    /**
     * @description The ID of the region to which the tags belong.
     *
     * @example true
     *
     * @var bool
     */
    public $enableInstallAgent;

    /**
     * @description The keys of the tags that are used to create the application group. If a specified key is attached to multiple resources, the resources that have the same key-value pair are added to the same group.
     *
     * @example true
     *
     * @var bool
     */
    public $enableSubscribeEvent;

    /**
     * @description Specifies whether the CloudMonitor agent is automatically installed for the application group. CloudMonitor determines whether to automatically install the CloudMonitor agent for the hosts in an application group based on the value of this parameter. Valid values:
     *
     *   true: The CloudMonitor agent is automatically installed.
     *   false (default): The CloudMonitor agent is not automatically installed.
     *
     * @var matchExpress[]
     */
    public $matchExpress;

    /**
     * @description Specifies whether the application group automatically subscribes to event notifications. If events whose severity level is critical or warning occur on resources in an application group, CloudMonitor sends alert notifications. Valid values:
     *
     *   true: The application group automatically subscribes to event notifications.
     *   false (default): The application group does not automatically subscribe to event notifications.
     *
     * @example and
     *
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The alert contact groups. Valid values of N: 1 to 100. The alert notifications of the application group are sent to the alert contacts that belong to the specified alert contact groups.
     *
     * An alert contact group can contain one or more alert contacts. For information about how to create alert contacts and alert contact groups, see [PutContact](~~114923~~) and [PutContactGroup](~~114929~~). For information about how to obtain alert contact groups, see [DescribeContactGroupList](~~114922~~).
     * @example ecs_instance
     *
     * @var string
     */
    public $tagKey;

    /**
     * @description The tag keys of the cloud resources.
     *
     * For more information about how to obtain tag keys, see [DescribeTagKeyList](~~145558~~).
     * @example cn-hangzhou
     *
     * @var string
     */
    public $tagRegionId;

    /**
     * @description The IDs of the alert templates.
     *
     * For more information about how to query alert template IDs, see [DescribeMetricRuleTemplateList](~~114982~~).
     * @example 85****
     *
     * @var string[]
     */
    public $templateIdList;
    protected $_name = [
        'contactGroupList'           => 'ContactGroupList',
        'enableInstallAgent'         => 'EnableInstallAgent',
        'enableSubscribeEvent'       => 'EnableSubscribeEvent',
        'matchExpress'               => 'MatchExpress',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'regionId'                   => 'RegionId',
        'tagKey'                     => 'TagKey',
        'tagRegionId'                => 'TagRegionId',
        'templateIdList'             => 'TemplateIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupList) {
            $res['ContactGroupList'] = $this->contactGroupList;
        }
        if (null !== $this->enableInstallAgent) {
            $res['EnableInstallAgent'] = $this->enableInstallAgent;
        }
        if (null !== $this->enableSubscribeEvent) {
            $res['EnableSubscribeEvent'] = $this->enableSubscribeEvent;
        }
        if (null !== $this->matchExpress) {
            $res['MatchExpress'] = [];
            if (null !== $this->matchExpress && \is_array($this->matchExpress)) {
                $n = 0;
                foreach ($this->matchExpress as $item) {
                    $res['MatchExpress'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->matchExpressFilterRelation) {
            $res['MatchExpressFilterRelation'] = $this->matchExpressFilterRelation;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tagKey) {
            $res['TagKey'] = $this->tagKey;
        }
        if (null !== $this->tagRegionId) {
            $res['TagRegionId'] = $this->tagRegionId;
        }
        if (null !== $this->templateIdList) {
            $res['TemplateIdList'] = $this->templateIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDynamicTagGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupList'])) {
            if (!empty($map['ContactGroupList'])) {
                $model->contactGroupList = $map['ContactGroupList'];
            }
        }
        if (isset($map['EnableInstallAgent'])) {
            $model->enableInstallAgent = $map['EnableInstallAgent'];
        }
        if (isset($map['EnableSubscribeEvent'])) {
            $model->enableSubscribeEvent = $map['EnableSubscribeEvent'];
        }
        if (isset($map['MatchExpress'])) {
            if (!empty($map['MatchExpress'])) {
                $model->matchExpress = [];
                $n                   = 0;
                foreach ($map['MatchExpress'] as $item) {
                    $model->matchExpress[$n++] = null !== $item ? matchExpress::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['MatchExpressFilterRelation'])) {
            $model->matchExpressFilterRelation = $map['MatchExpressFilterRelation'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TagKey'])) {
            $model->tagKey = $map['TagKey'];
        }
        if (isset($map['TagRegionId'])) {
            $model->tagRegionId = $map['TagRegionId'];
        }
        if (isset($map['TemplateIdList'])) {
            if (!empty($map['TemplateIdList'])) {
                $model->templateIdList = $map['TemplateIdList'];
            }
        }

        return $model;
    }
}
