<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\CopyTemplateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $sceneTemplateCode;

    /**
     * @var string
     */
    public $sceneTemplateName;

    /**
     * @var string
     */
    public $whatsappCatagory;
    protected $_name = [
        'sceneTemplateCode' => 'SceneTemplateCode',
        'sceneTemplateName' => 'SceneTemplateName',
        'whatsappCatagory' => 'WhatsappCatagory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->sceneTemplateCode) {
            $res['SceneTemplateCode'] = $this->sceneTemplateCode;
        }

        if (null !== $this->sceneTemplateName) {
            $res['SceneTemplateName'] = $this->sceneTemplateName;
        }

        if (null !== $this->whatsappCatagory) {
            $res['WhatsappCatagory'] = $this->whatsappCatagory;
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
        if (isset($map['SceneTemplateCode'])) {
            $model->sceneTemplateCode = $map['SceneTemplateCode'];
        }

        if (isset($map['SceneTemplateName'])) {
            $model->sceneTemplateName = $map['SceneTemplateName'];
        }

        if (isset($map['WhatsappCatagory'])) {
            $model->whatsappCatagory = $map['WhatsappCatagory'];
        }

        return $model;
    }
}
