<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoResponseBody\workflow\statuses;
use AlibabaCloud\SDK\Devops\V20210625\Models\GetWorkItemWorkFlowInfoResponseBody\workflow\workflowActions;

class workflow extends Model
{
    /**
     * @var string
     */
    public $creator;
    /**
     * @var string
     */
    public $defaultStatusIdentifier;
    /**
     * @var string
     */
    public $description;
    /**
     * @var int
     */
    public $gmtCreate;
    /**
     * @var int
     */
    public $gmtModified;
    /**
     * @var string
     */
    public $identifier;
    /**
     * @var string
     */
    public $modifier;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $ownerSpaceIdentifier;
    /**
     * @var string
     */
    public $ownerSpaceType;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var string
     */
    public $source;
    /**
     * @var string
     */
    public $statusOrder;
    /**
     * @var statuses[]
     */
    public $statuses;
    /**
     * @var workflowActions[]
     */
    public $workflowActions;
    protected $_name = [
        'creator'                 => 'creator',
        'defaultStatusIdentifier' => 'defaultStatusIdentifier',
        'description'             => 'description',
        'gmtCreate'               => 'gmtCreate',
        'gmtModified'             => 'gmtModified',
        'identifier'              => 'identifier',
        'modifier'                => 'modifier',
        'name'                    => 'name',
        'ownerSpaceIdentifier'    => 'ownerSpaceIdentifier',
        'ownerSpaceType'          => 'ownerSpaceType',
        'resourceType'            => 'resourceType',
        'source'                  => 'source',
        'statusOrder'             => 'statusOrder',
        'statuses'                => 'statuses',
        'workflowActions'         => 'workflowActions',
    ];

    public function validate()
    {
        if (\is_array($this->statuses)) {
            Model::validateArray($this->statuses);
        }
        if (\is_array($this->workflowActions)) {
            Model::validateArray($this->workflowActions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }

        if (null !== $this->defaultStatusIdentifier) {
            $res['defaultStatusIdentifier'] = $this->defaultStatusIdentifier;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->identifier) {
            $res['identifier'] = $this->identifier;
        }

        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->ownerSpaceIdentifier) {
            $res['ownerSpaceIdentifier'] = $this->ownerSpaceIdentifier;
        }

        if (null !== $this->ownerSpaceType) {
            $res['ownerSpaceType'] = $this->ownerSpaceType;
        }

        if (null !== $this->resourceType) {
            $res['resourceType'] = $this->resourceType;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->statusOrder) {
            $res['statusOrder'] = $this->statusOrder;
        }

        if (null !== $this->statuses) {
            if (\is_array($this->statuses)) {
                $res['statuses'] = [];
                $n1              = 0;
                foreach ($this->statuses as $item1) {
                    $res['statuses'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->workflowActions) {
            if (\is_array($this->workflowActions)) {
                $res['workflowActions'] = [];
                $n1                     = 0;
                foreach ($this->workflowActions as $item1) {
                    $res['workflowActions'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }

        if (isset($map['defaultStatusIdentifier'])) {
            $model->defaultStatusIdentifier = $map['defaultStatusIdentifier'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['identifier'])) {
            $model->identifier = $map['identifier'];
        }

        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['ownerSpaceIdentifier'])) {
            $model->ownerSpaceIdentifier = $map['ownerSpaceIdentifier'];
        }

        if (isset($map['ownerSpaceType'])) {
            $model->ownerSpaceType = $map['ownerSpaceType'];
        }

        if (isset($map['resourceType'])) {
            $model->resourceType = $map['resourceType'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['statusOrder'])) {
            $model->statusOrder = $map['statusOrder'];
        }

        if (isset($map['statuses'])) {
            if (!empty($map['statuses'])) {
                $model->statuses = [];
                $n1              = 0;
                foreach ($map['statuses'] as $item1) {
                    $model->statuses[$n1++] = statuses::fromMap($item1);
                }
            }
        }

        if (isset($map['workflowActions'])) {
            if (!empty($map['workflowActions'])) {
                $model->workflowActions = [];
                $n1                     = 0;
                foreach ($map['workflowActions'] as $item1) {
                    $model->workflowActions[$n1++] = workflowActions::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
