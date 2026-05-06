<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class ListModelProviderTemplatesShrinkRequest extends Model
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
     * @var string
     */
    public $modelTemplateId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $providerName;

    /**
     * @var string
     */
    public $providerTemplateIdsShrink;
    protected $_name = [
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'bizType' => 'BizType',
        'modelTemplateId' => 'ModelTemplateId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'providerName' => 'ProviderName',
        'providerTemplateIdsShrink' => 'ProviderTemplateIds',
    ];

    public function validate()
    {
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

        if (null !== $this->modelTemplateId) {
            $res['ModelTemplateId'] = $this->modelTemplateId;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->providerName) {
            $res['ProviderName'] = $this->providerName;
        }

        if (null !== $this->providerTemplateIdsShrink) {
            $res['ProviderTemplateIds'] = $this->providerTemplateIdsShrink;
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

        if (isset($map['ModelTemplateId'])) {
            $model->modelTemplateId = $map['ModelTemplateId'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ProviderName'])) {
            $model->providerName = $map['ProviderName'];
        }

        if (isset($map['ProviderTemplateIds'])) {
            $model->providerTemplateIdsShrink = $map['ProviderTemplateIds'];
        }

        return $model;
    }
}
