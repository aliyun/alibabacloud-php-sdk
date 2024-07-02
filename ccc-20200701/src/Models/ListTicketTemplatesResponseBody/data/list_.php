<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketTemplatesResponseBody\data;

use AlibabaCloud\SDK\CCC\V20200701\Models\ListTicketTemplatesResponseBody\data\list_\ticketFields;
use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $appliedVersion;

    /**
     * @example 43c2671b-*****-4223-86d0-6bd187905cc8
     *
     * @var string
     */
    public $categoryId;

    /**
     * @example creator@ccc-test
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
     * @example 1715780670000
     *
     * @var string
     */
    public $latestVersion;

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
     * @example b5c21219-3a1e-4bc0-92e7-da66e057d2f6
     *
     * @var string
     */
    public $templateId;

    /**
     * @var ticketFields[]
     */
    public $ticketFields;

    /**
     * @example 1715780670000
     *
     * @var int
     */
    public $updatedTime;
    protected $_name = [
        'appliedVersion'    => 'AppliedVersion',
        'categoryId'        => 'CategoryId',
        'editor'            => 'Editor',
        'instanceId'        => 'InstanceId',
        'latestVersion'     => 'LatestVersion',
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
        if (null !== $this->appliedVersion) {
            $res['AppliedVersion'] = $this->appliedVersion;
        }
        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }
        if (null !== $this->editor) {
            $res['Editor'] = $this->editor;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = $this->latestVersion;
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
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppliedVersion'])) {
            $model->appliedVersion = $map['AppliedVersion'];
        }
        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }
        if (isset($map['Editor'])) {
            $model->editor = $map['Editor'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LatestVersion'])) {
            $model->latestVersion = $map['LatestVersion'];
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
