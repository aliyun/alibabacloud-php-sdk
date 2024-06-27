<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class ModifyTemplateStatusRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $fromTemplateSatus;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $toTemplateSatus;
    protected $_name = [
        'lang'              => 'Lang',
        'fromTemplateSatus' => 'fromTemplateSatus',
        'regId'             => 'regId',
        'templateId'        => 'templateId',
        'toTemplateSatus'   => 'toTemplateSatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->fromTemplateSatus) {
            $res['fromTemplateSatus'] = $this->fromTemplateSatus;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }
        if (null !== $this->toTemplateSatus) {
            $res['toTemplateSatus'] = $this->toTemplateSatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTemplateStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['fromTemplateSatus'])) {
            $model->fromTemplateSatus = $map['fromTemplateSatus'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }
        if (isset($map['toTemplateSatus'])) {
            $model->toTemplateSatus = $map['toTemplateSatus'];
        }

        return $model;
    }
}
