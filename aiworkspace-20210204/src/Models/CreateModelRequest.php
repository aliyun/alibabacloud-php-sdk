<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class CreateModelRequest extends Model
{
    /**
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example nlp
     *
     * @var string
     */
    public $domain;

    /**
     * @var mixed[]
     */
    public $extraInfo;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var string
     */
    public $modelDescription;

    /**
     * @example https://*.md
     *
     * @var string
     */
    public $modelDoc;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $modelName;

    /**
     * @example Checkpoint
     *
     * @var string
     */
    public $modelType;

    /**
     * @example 101
     *
     * @var int
     */
    public $orderNumber;

    /**
     * @example ModelScope
     *
     * @var string
     */
    public $origin;

    /**
     * @example text-classification
     *
     * @var string
     */
    public $task;

    /**
     * @example 796**
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'    => 'Accessibility',
        'domain'           => 'Domain',
        'extraInfo'        => 'ExtraInfo',
        'labels'           => 'Labels',
        'modelDescription' => 'ModelDescription',
        'modelDoc'         => 'ModelDoc',
        'modelName'        => 'ModelName',
        'modelType'        => 'ModelType',
        'orderNumber'      => 'OrderNumber',
        'origin'           => 'Origin',
        'task'             => 'Task',
        'workspaceId'      => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }
        if (null !== $this->labels) {
            $res['Labels'] = [];
            if (null !== $this->labels && \is_array($this->labels)) {
                $n = 0;
                foreach ($this->labels as $item) {
                    $res['Labels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->modelDescription) {
            $res['ModelDescription'] = $this->modelDescription;
        }
        if (null !== $this->modelDoc) {
            $res['ModelDoc'] = $this->modelDoc;
        }
        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }
        if (null !== $this->modelType) {
            $res['ModelType'] = $this->modelType;
        }
        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }
        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateModelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }
        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n             = 0;
                foreach ($map['Labels'] as $item) {
                    $model->labels[$n++] = null !== $item ? Label::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ModelDescription'])) {
            $model->modelDescription = $map['ModelDescription'];
        }
        if (isset($map['ModelDoc'])) {
            $model->modelDoc = $map['ModelDoc'];
        }
        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }
        if (isset($map['ModelType'])) {
            $model->modelType = $map['ModelType'];
        }
        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }
        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
