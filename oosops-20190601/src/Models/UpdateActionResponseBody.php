<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oosops\V20190601\Models;

use AlibabaCloud\Tea\Model;

class UpdateActionResponseBody extends Model
{
    /**
     * @var string
     */
    public $actionName;

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
    public $requestId;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'actionName'      => 'ActionName',
        'actionType'      => 'ActionType',
        'createdDate'     => 'CreatedDate',
        'description'     => 'Description',
        'popularity'      => 'Popularity',
        'properties'      => 'Properties',
        'requestId'       => 'RequestId',
        'templateVersion' => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionName) {
            $res['ActionName'] = $this->actionName;
        }
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->createdDate) {
            $res['CreatedDate'] = $this->createdDate;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->popularity) {
            $res['Popularity'] = $this->popularity;
        }
        if (null !== $this->properties) {
            $res['Properties'] = $this->properties;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateActionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionName'])) {
            $model->actionName = $map['ActionName'];
        }
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['CreatedDate'])) {
            $model->createdDate = $map['CreatedDate'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Popularity'])) {
            $model->popularity = $map['Popularity'];
        }
        if (isset($map['Properties'])) {
            $model->properties = $map['Properties'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
