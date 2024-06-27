<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class ModifyEventRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $bizVersion;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var string
     */
    public $inputFieldsStr;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $templateType;
    protected $_name = [
        'lang'           => 'Lang',
        'bizVersion'     => 'bizVersion',
        'createType'     => 'createType',
        'eventCode'      => 'eventCode',
        'inputFieldsStr' => 'inputFieldsStr',
        'memo'           => 'memo',
        'regId'          => 'regId',
        'templateType'   => 'templateType',
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
        if (null !== $this->bizVersion) {
            $res['bizVersion'] = $this->bizVersion;
        }
        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->inputFieldsStr) {
            $res['inputFieldsStr'] = $this->inputFieldsStr;
        }
        if (null !== $this->memo) {
            $res['memo'] = $this->memo;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->templateType) {
            $res['templateType'] = $this->templateType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['bizVersion'])) {
            $model->bizVersion = $map['bizVersion'];
        }
        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['inputFieldsStr'])) {
            $model->inputFieldsStr = $map['inputFieldsStr'];
        }
        if (isset($map['memo'])) {
            $model->memo = $map['memo'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['templateType'])) {
            $model->templateType = $map['templateType'];
        }

        return $model;
    }
}
