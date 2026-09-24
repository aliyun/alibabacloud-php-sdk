<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models;

use AlibabaCloud\Dara\Model;

class PageQueryAgentListNewRequest extends Model
{
    /**
     * @var string
     */
    public $agentId;

    /**
     * @var string
     */
    public $agentName;

    /**
     * @var bool
     */
    public $inboundConfigurableOnly;

    /**
     * @var bool
     */
    public $isAvailable;

    /**
     * @var int
     */
    public $pageIndex;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $serviceDirection;

    /**
     * @var int
     */
    public $templateId;
    protected $_name = [
        'agentId' => 'AgentId',
        'agentName' => 'AgentName',
        'inboundConfigurableOnly' => 'InboundConfigurableOnly',
        'isAvailable' => 'IsAvailable',
        'pageIndex' => 'PageIndex',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'serviceDirection' => 'ServiceDirection',
        'templateId' => 'TemplateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentId) {
            $res['AgentId'] = $this->agentId;
        }

        if (null !== $this->agentName) {
            $res['AgentName'] = $this->agentName;
        }

        if (null !== $this->inboundConfigurableOnly) {
            $res['InboundConfigurableOnly'] = $this->inboundConfigurableOnly;
        }

        if (null !== $this->isAvailable) {
            $res['IsAvailable'] = $this->isAvailable;
        }

        if (null !== $this->pageIndex) {
            $res['PageIndex'] = $this->pageIndex;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->serviceDirection) {
            $res['ServiceDirection'] = $this->serviceDirection;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['AgentId'])) {
            $model->agentId = $map['AgentId'];
        }

        if (isset($map['AgentName'])) {
            $model->agentName = $map['AgentName'];
        }

        if (isset($map['InboundConfigurableOnly'])) {
            $model->inboundConfigurableOnly = $map['InboundConfigurableOnly'];
        }

        if (isset($map['IsAvailable'])) {
            $model->isAvailable = $map['IsAvailable'];
        }

        if (isset($map['PageIndex'])) {
            $model->pageIndex = $map['PageIndex'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ServiceDirection'])) {
            $model->serviceDirection = $map['ServiceDirection'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
