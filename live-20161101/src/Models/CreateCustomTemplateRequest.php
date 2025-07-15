<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateCustomTemplateRequest extends Model
{
    /**
     * @description The configuration of the template. The value is in the following JSON format: {height:xxx,scale:xxx,gop:xxx,bframes:xxx,cdesc:xxx}. All fields are required. If any field is left empty, the call fails.
     *
     * >  For more information, see **Fields of the CustomTemplate parameter**.
     *
     * This parameter is required.
     *
     * @example {height:1080,scale:[16:9],gop:60,bframes:30,cdesc:h264}
     *
     * @var string
     */
    public $customTemplate;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the template.
     *
     * > Record the template name. The template name is required if you want to use, query, or delete the template.
     *
     * This parameter is required.
     *
     * @example TestTemplate
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'customTemplate' => 'CustomTemplate',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'template' => 'Template',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->customTemplate) {
            $res['CustomTemplate'] = $this->customTemplate;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->template) {
            $res['Template'] = $this->template;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCustomTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomTemplate'])) {
            $model->customTemplate = $map['CustomTemplate'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Template'])) {
            $model->template = $map['Template'];
        }

        return $model;
    }
}
