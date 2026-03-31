<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oos\V20190601\Models;

use AlibabaCloud\Dara\Model;

class UpdateTemplateAttributesRequest extends Model
{
    /**
     * @var string
     */
    public $accountIds;

    /**
     * @var bool
     */
    public $isFavorite;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $sharePermissionAction;

    /**
     * @var string
     */
    public $shareTemplateVersion;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'accountIds' => 'AccountIds',
        'isFavorite' => 'IsFavorite',
        'regionId' => 'RegionId',
        'sharePermissionAction' => 'SharePermissionAction',
        'shareTemplateVersion' => 'ShareTemplateVersion',
        'templateName' => 'TemplateName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }

        if (null !== $this->isFavorite) {
            $res['IsFavorite'] = $this->isFavorite;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sharePermissionAction) {
            $res['SharePermissionAction'] = $this->sharePermissionAction;
        }

        if (null !== $this->shareTemplateVersion) {
            $res['ShareTemplateVersion'] = $this->shareTemplateVersion;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
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
        if (isset($map['AccountIds'])) {
            $model->accountIds = $map['AccountIds'];
        }

        if (isset($map['IsFavorite'])) {
            $model->isFavorite = $map['IsFavorite'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SharePermissionAction'])) {
            $model->sharePermissionAction = $map['SharePermissionAction'];
        }

        if (isset($map['ShareTemplateVersion'])) {
            $model->shareTemplateVersion = $map['ShareTemplateVersion'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
