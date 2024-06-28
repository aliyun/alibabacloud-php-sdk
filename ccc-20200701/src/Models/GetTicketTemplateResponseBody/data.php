<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketTemplateResponseBody;

use AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketTemplateResponseBody\data\ticketFields;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 43c2671b-****-4223-86d0-6bd187905cc8
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example editor-xxx@ccc-test
     *
     * @var string
     */
    public $editor;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $processDefinition;

    /**
     * @example Enabled
     *
     * @var string
     */
    public $state;

    /**
     * @example 4ca2e2-c8d19b82c-d7ce393ac8197d3ab
     *
     * @var string
     */
    public $templateId;

    /**
     * @var ticketFields[]
     */
    public $ticketFields;

    /**
     * @example 1717664210000
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'categoryId'        => 'CategoryId',
        'editor'            => 'Editor',
        'instanceId'        => 'InstanceId',
        'name'              => 'Name',
        'processDefinition' => 'ProcessDefinition',
        'state'             => 'State',
        'templateId'        => 'TemplateId',
        'ticketFields'      => 'TicketFields',
        'updatedTime'       => 'UpdatedTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->editor) {
            $res['Editor'] = $this->editor;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->processDefinition) {
            $res['ProcessDefinition'] = $this->processDefinition;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->ticketFields) {
            $res['TicketFields'] = [];
            if (null !== $this->ticketFields && \is_array($this->ticketFields)) {
                $n = 0;
                foreach ($this->ticketFields as $item) {
                    $res['TicketFields'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Editor'])) {
            $model->editor = $map['Editor'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ProcessDefinition'])) {
            $model->processDefinition = $map['ProcessDefinition'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TicketFields'])) {
            if (!empty($map['TicketFields'])) {
                $model->ticketFields = [];
                $n                   = 0;
                foreach ($map['TicketFields'] as $item) {
                    $model->ticketFields[$n++] = null !== $item ? ticketFields::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
