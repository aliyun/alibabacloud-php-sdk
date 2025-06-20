<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckRequest;

use AlibabaCloud\Dara\Model;

class bgCustomTemplateExtraDTO extends Model
{
    /**
     * @var string
     */
    public $bgCustomTemplate;

    /**
     * @var int
     */
    public $bgCustomTemplateId;

    /**
     * @var string
     */
    public $bgCustomTemplateInfo;

    /**
     * @var string
     */
    public $bgCustomTemplateTitle;

    /**
     * @var string
     */
    public $bgVid;

    /**
     * @var string
     */
    public $extraInfo;
    protected $_name = [
        'bgCustomTemplate' => 'BgCustomTemplate',
        'bgCustomTemplateId' => 'BgCustomTemplateId',
        'bgCustomTemplateInfo' => 'BgCustomTemplateInfo',
        'bgCustomTemplateTitle' => 'BgCustomTemplateTitle',
        'bgVid' => 'BgVid',
        'extraInfo' => 'ExtraInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bgCustomTemplate) {
            $res['BgCustomTemplate'] = $this->bgCustomTemplate;
        }

        if (null !== $this->bgCustomTemplateId) {
            $res['BgCustomTemplateId'] = $this->bgCustomTemplateId;
        }

        if (null !== $this->bgCustomTemplateInfo) {
            $res['BgCustomTemplateInfo'] = $this->bgCustomTemplateInfo;
        }

        if (null !== $this->bgCustomTemplateTitle) {
            $res['BgCustomTemplateTitle'] = $this->bgCustomTemplateTitle;
        }

        if (null !== $this->bgVid) {
            $res['BgVid'] = $this->bgVid;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
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
        if (isset($map['BgCustomTemplate'])) {
            $model->bgCustomTemplate = $map['BgCustomTemplate'];
        }

        if (isset($map['BgCustomTemplateId'])) {
            $model->bgCustomTemplateId = $map['BgCustomTemplateId'];
        }

        if (isset($map['BgCustomTemplateInfo'])) {
            $model->bgCustomTemplateInfo = $map['BgCustomTemplateInfo'];
        }

        if (isset($map['BgCustomTemplateTitle'])) {
            $model->bgCustomTemplateTitle = $map['BgCustomTemplateTitle'];
        }

        if (isset($map['BgVid'])) {
            $model->bgVid = $map['BgVid'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        return $model;
    }
}
