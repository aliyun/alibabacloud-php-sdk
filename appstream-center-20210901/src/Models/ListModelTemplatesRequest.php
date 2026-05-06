<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListModelTemplatesRequest extends Model
{
    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var int
     */
    public $bizType;

    /**
     * @var bool
     */
    public $hasModel;

    /**
     * @var string[]
     */
    public $modelTemplateIdList;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'bizType' => 'BizType',
        'hasModel' => 'HasModel',
        'modelTemplateIdList' => 'ModelTemplateIdList',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        if (\is_array($this->modelTemplateIdList)) {
            Model::validateArray($this->modelTemplateIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->bizType) {
            $res['BizType'] = $this->bizType;
        }

        if (null !== $this->hasModel) {
            $res['HasModel'] = $this->hasModel;
        }

        if (null !== $this->modelTemplateIdList) {
            if (\is_array($this->modelTemplateIdList)) {
                $res['ModelTemplateIdList'] = [];
                $n1 = 0;
                foreach ($this->modelTemplateIdList as $item1) {
                    $res['ModelTemplateIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['BizType'])) {
            $model->bizType = $map['BizType'];
        }

        if (isset($map['HasModel'])) {
            $model->hasModel = $map['HasModel'];
        }

        if (isset($map['ModelTemplateIdList'])) {
            if (!empty($map['ModelTemplateIdList'])) {
                $model->modelTemplateIdList = [];
                $n1 = 0;
                foreach ($map['ModelTemplateIdList'] as $item1) {
                    $model->modelTemplateIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
