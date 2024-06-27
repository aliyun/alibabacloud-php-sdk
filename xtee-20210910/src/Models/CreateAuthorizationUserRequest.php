<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class CreateAuthorizationUserRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $bindId;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var int
     */
    public $eventTemplateId;

    /**
     * @var string
     */
    public $regId;
    protected $_name = [
        'lang'            => 'Lang',
        'bindId'          => 'bindId',
        'createType'      => 'createType',
        'eventTemplateId' => 'eventTemplateId',
        'regId'           => 'regId',
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
        if (null !== $this->bindId) {
            $res['bindId'] = $this->bindId;
        }
        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }
        if (null !== $this->eventTemplateId) {
            $res['eventTemplateId'] = $this->eventTemplateId;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAuthorizationUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['bindId'])) {
            $model->bindId = $map['bindId'];
        }
        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }
        if (isset($map['eventTemplateId'])) {
            $model->eventTemplateId = $map['eventTemplateId'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }

        return $model;
    }
}
