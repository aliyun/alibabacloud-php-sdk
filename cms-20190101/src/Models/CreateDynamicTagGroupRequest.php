<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest\matchExpress;
use AlibabaCloud\Tea\Model;

class CreateDynamicTagGroupRequest extends Model
{
    /**
     * @example ECS_Group
     *
     * @var string[]
     */
    public $contactGroupList;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableInstallAgent;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableSubscribeEvent;

    /**
     * @var matchExpress[]
     */
    public $matchExpress;

    /**
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
     * @example ecs_instance
     *
     * @var string
     */
    public $tagKey;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $tagRegionId;

    /**
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
