<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListActionsResponseBody;

use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @var string
     */
    public $actionType;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $createdDate;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $OOSActionName;

    /**
     * @var string
     */
    public $properties;
    protected $_name = [
        'actionType'      => 'ActionType',
        'description'     => 'Description',
        'createdDate'     => 'CreatedDate',
        'templateVersion' => 'TemplateVersion',
        'OOSActionName'   => 'OOSActionName',
        'properties'      => 'Properties',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->OOSActionName) {
            $res['OOSActionName'] = $this->OOSActionName;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return actions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['OOSActionName'])) {
            $model->OOSActionName = $map['OOSActionName'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }

        return $model;
    }
}
