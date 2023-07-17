<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models\ListAlertTemplatesResponseBody;

use AlibabaCloud\SDK\ARMS\V20210422\Models\ListAlertTemplatesResponseBody\alertTemplates\labelMatchExpressionGrid;
use AlibabaCloud\Tea\Model;

class alertTemplates extends Model
{
    /**
     * @var string
     */
    public $alertProvider;

    /**
     * @var mixed[]
     */
    public $annotations;

    /**
     * @var int
     */
    public $id;

    /**
     * @var labelMatchExpressionGrid
     */
    public $labelMatchExpressionGrid;

    /**
     * @var mixed[]
     */
    public $labels;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $parentId;

    /**
     * @var bool
     */
    public $public;

    /**
     * @var string
     */
    public $rule;

    /**
     * @var bool
     */
    public $status;

    /**
     * @var string
     */
    public $templateProvider;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'alertProvider'            => 'AlertProvider',
        'annotations'              => 'Annotations',
        'id'                       => 'Id',
        'labelMatchExpressionGrid' => 'LabelMatchExpressionGrid',
        'labels'                   => 'Labels',
        'message'                  => 'Message',
        'name'                     => 'Name',
        'parentId'                 => 'ParentId',
        'public'                   => 'Public',
        'rule'                     => 'Rule',
        'status'                   => 'Status',
        'templateProvider'         => 'TemplateProvider',
        'type'                     => 'Type',
        'userId'                   => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->alertProvider) {
            $res['AlertProvider'] = $this->alertProvider;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->labelMatchExpressionGrid) {
            $res['LabelMatchExpressionGrid'] = null !== $this->labelMatchExpressionGrid ? $this->labelMatchExpressionGrid->toMap() : null;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->public) {
            $res['Public'] = $this->public;
        }
        if (null !== $this->rule) {
            $res['Rule'] = $this->rule;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateProvider) {
            $res['TemplateProvider'] = $this->templateProvider;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return alertTemplates
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlertProvider'])) {
            $model->alertProvider = $map['AlertProvider'];
        }
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['LabelMatchExpressionGrid'])) {
            $model->labelMatchExpressionGrid = labelMatchExpressionGrid::fromMap($map['LabelMatchExpressionGrid']);
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Public'])) {
            $model->public = $map['Public'];
        }
        if (isset($map['Rule'])) {
            $model->rule = $map['Rule'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateProvider'])) {
            $model->templateProvider = $map['TemplateProvider'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
