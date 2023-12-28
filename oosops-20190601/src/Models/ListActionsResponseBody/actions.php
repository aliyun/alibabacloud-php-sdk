<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models\ListActionsResponseBody;

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
    public $createdDate;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $OOSActionName;

    /**
     * @var int
     */
    public $popularity;

    /**
     * @var string
     */
    public $properties;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $updateDate;
    protected $_name = [
        'actionType'      => 'ActionType',
        'createdDate'     => 'CreatedDate',
        'description'     => 'Description',
        'OOSActionName'   => 'OOSActionName',
        'popularity'      => 'Popularity',
        'properties'      => 'Properties',
        'templateVersion' => 'TemplateVersion',
        'updateDate'      => 'UpdateDate',
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
        if (null !== $this->updateDate) {
            $res['UpdateDate'] = $this->updateDate;
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
        if (isset($map['UpdateDate'])) {
            $model->updateDate = $map['UpdateDate'];
        }

        return $model;
    }
}
