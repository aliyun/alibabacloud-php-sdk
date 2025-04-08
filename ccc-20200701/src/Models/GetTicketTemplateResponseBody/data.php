<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketTemplateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetTicketTemplateResponseBody\data\ticketFields;

class data extends Model
{
    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $editor;

    /**
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
     * @var string
     */
    public $state;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var ticketFields[]
     */
    public $ticketFields;

    /**
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'categoryId' => 'CategoryId',
        'editor' => 'Editor',
        'instanceId' => 'InstanceId',
        'name' => 'Name',
        'processDefinition' => 'ProcessDefinition',
        'state' => 'State',
        'templateId' => 'TemplateId',
        'ticketFields' => 'TicketFields',
        'updatedTime' => 'UpdatedTime',
    ];

    public function validate()
    {
        if (\is_array($this->ticketFields)) {
            Model::validateArray($this->ticketFields);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->ticketFields)) {
                $res['TicketFields'] = [];
                $n1 = 0;
                foreach ($this->ticketFields as $item1) {
                    $res['TicketFields'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
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
                $n1 = 0;
                foreach ($map['TicketFields'] as $item1) {
                    $model->ticketFields[$n1++] = ticketFields::fromMap($item1);
                }
            }
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        return $model;
    }
}
