<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class UpdateAuthorityTemplateRequest extends Model
{
    /**
     * @description The description of the permission template.
     *
     * >  You must specify the Name or Description parameter. Otherwise, the API call fails.
     * @example This template is used for business testing.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the permission template.
     *
     * >  You must specify the Name or Description parameter. Otherwise, the API call fails.
     * @example Test template.
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the permission template.
     *
     * @example 1563
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The ID of the tenant. You can call the [GetUserActiveTenant](~~198073~~) or [ListUserTenants](~~198074~~) operation to query the tenant ID.
     *
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'templateId'  => 'TemplateId',
        'tid'         => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAuthorityTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
