<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateDynamicTagGroupRequest\matchExpress;

class CreateDynamicTagGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $contactGroupList;

    /**
     * @var bool
     */
    public $enableInstallAgent;

    /**
     * @var bool
     */
    public $enableSubscribeEvent;

    /**
     * @var matchExpress[]
     */
    public $matchExpress;

    /**
     * @var string
     */
    public $matchExpressFilterRelation;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $tagKey;

    /**
     * @var string
     */
    public $tagRegionId;

    /**
     * @var string[]
     */
    public $templateIdList;
    protected $_name = [
        'contactGroupList' => 'ContactGroupList',
        'enableInstallAgent' => 'EnableInstallAgent',
        'enableSubscribeEvent' => 'EnableSubscribeEvent',
        'matchExpress' => 'MatchExpress',
        'matchExpressFilterRelation' => 'MatchExpressFilterRelation',
        'regionId' => 'RegionId',
        'tagKey' => 'TagKey',
        'tagRegionId' => 'TagRegionId',
        'templateIdList' => 'TemplateIdList',
    ];

    public function validate()
    {
        if (\is_array($this->contactGroupList)) {
            Model::validateArray($this->contactGroupList);
        }
        if (\is_array($this->matchExpress)) {
            Model::validateArray($this->matchExpress);
        }
        if (\is_array($this->templateIdList)) {
            Model::validateArray($this->templateIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupList) {
            if (\is_array($this->contactGroupList)) {
                $res['ContactGroupList'] = [];
                $n1 = 0;
                foreach ($this->contactGroupList as $item1) {
                    $res['ContactGroupList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->enableInstallAgent) {
            $res['EnableInstallAgent'] = $this->enableInstallAgent;
        }

        if (null !== $this->enableSubscribeEvent) {
            $res['EnableSubscribeEvent'] = $this->enableSubscribeEvent;
        }

        if (null !== $this->matchExpress) {
            if (\is_array($this->matchExpress)) {
                $res['MatchExpress'] = [];
                $n1 = 0;
                foreach ($this->matchExpress as $item1) {
                    $res['MatchExpress'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->templateIdList)) {
                $res['TemplateIdList'] = [];
                $n1 = 0;
                foreach ($this->templateIdList as $item1) {
                    $res['TemplateIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['ContactGroupList'])) {
            if (!empty($map['ContactGroupList'])) {
                $model->contactGroupList = [];
                $n1 = 0;
                foreach ($map['ContactGroupList'] as $item1) {
                    $model->contactGroupList[$n1] = $item1;
                    ++$n1;
                }
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
                $n1 = 0;
                foreach ($map['MatchExpress'] as $item1) {
                    $model->matchExpress[$n1] = matchExpress::fromMap($item1);
                    ++$n1;
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
                $model->templateIdList = [];
                $n1 = 0;
                foreach ($map['TemplateIdList'] as $item1) {
                    $model->templateIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
