<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models\ListActionsResponseBody;

use AlibabaCloud\Tea\Model;

class actions extends Model
{
    /**
     * @description The type of the action.
     *
     * 1.  Atomic actions
     *
     *   Atomic.API
     *   Atomic.Trigger
     *   Atomic.Control
     *   Atomic.Embedded
     *
     * 2.  Cloud product actions
     *
     *   Product.ECS
     *   Product.RDS
     *   Product.VPC
     *   Product.FC
     *   ...
     *
     * @example ACS::Template
     *
     * @var string
     */
    public $actionType;

    /**
     * @description The time when the action was created.
     *
     * @example 2019-05-16T10:26:14Z
     *
     * @var string
     */
    public $createdDate;

    /**
     * @description The description of the action.
     *
     * @example ReplaceSystemDisk
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the action.
     *
     * @example ACS::ECS::ReplaceSystemDisk
     *
     * @var string
     */
    public $OOSActionName;

    /**
     * @description The number of times that the action is used.
     *
     * @example 5
     *
     * @var int
     */
    public $popularity;

    /**
     * @description The parameters of the action.
     *
     * @example { "ImageId": { "Description": "The mirror ID you will use when resetting the system", "Type": "String" }, "InstanceId": { "Description": "the instance id that you will handle .", "Type": "String" } }
     *
     * @var string
     */
    public $properties;

    /**
     * @description The version of the template that corresponds to the action.
     *
     * >  For atomic actions, this parameter is not returned.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'actionType'      => 'ActionType',
        'createdDate'     => 'CreatedDate',
        'description'     => 'Description',
        'OOSActionName'   => 'OOSActionName',
        'popularity'      => 'Popularity',
        'properties'      => 'Properties',
        'templateVersion' => 'TemplateVersion',
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
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->OOSActionName) {
            $res['OOSActionName'] = $this->OOSActionName;
        }
        if (null !== $this->popularity) {
            $res['Popularity'] = $this->popularity;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
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
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['OOSActionName'])) {
            $model->OOSActionName = $map['OOSActionName'];
        }
        if (isset($map['Popularity'])) {
            $model->popularity = $map['Popularity'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
