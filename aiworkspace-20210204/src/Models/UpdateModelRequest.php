<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Dara\Model;

class UpdateModelRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;
    /**
     * @var string
     */
    public $domain;
    /**
     * @var mixed[]
     */
    public $extraInfo;
    /**
     * @var string
     */
    public $modelDescription;
    /**
     * @var string
     */
    public $modelDoc;
    /**
     * @var string
     */
    public $modelName;
    /**
     * @var string
     */
    public $modelType;
    /**
     * @var int
     */
    public $orderNumber;
    /**
     * @var string
     */
    public $origin;
    /**
     * @var string
     */
    public $task;
    protected $_name = [
        'accessibility'    => 'Accessibility',
        'domain'           => 'Domain',
        'extraInfo'        => 'ExtraInfo',
        'modelDescription' => 'ModelDescription',
        'modelDoc'         => 'ModelDoc',
        'modelName'        => 'ModelName',
        'modelType'        => 'ModelType',
        'orderNumber'      => 'OrderNumber',
        'origin'           => 'Origin',
        'task'             => 'Task',
    ];

    public function validate()
    {
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['ExtraInfo'][$key1] = $value1;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['ExtraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
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

        return $model;
    }
}
