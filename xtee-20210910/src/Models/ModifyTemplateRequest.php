<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\SDK\Xtee\V20210910\Models\ModifyTemplateRequest\inputFields;
use AlibabaCloud\Tea\Model;

class ModifyTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var inputFields
     */
    public $inputFields;

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
    public $templateType;

    /**
     * @var int
     */
    public $version;
    protected $_name = [
        'lang'         => 'Lang',
        'description'  => 'description',
        'eventCode'    => 'eventCode',
        'inputFields'  => 'inputFields',
        'regId'        => 'regId',
        'templateId'   => 'templateId',
        'templateType' => 'templateType',
        'version'      => 'version',
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
        if (null !== $this->description) {
            $res['description'] = $this->description;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->inputFields) {
            $res['inputFields'] = null !== $this->inputFields ? $this->inputFields->toMap() : null;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
        }
        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['description'])) {
            $model->description = $map['description'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['inputFields'])) {
            $model->inputFields = inputFields::fromMap($map['inputFields']);
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }
        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }
        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        return $model;
    }
}
