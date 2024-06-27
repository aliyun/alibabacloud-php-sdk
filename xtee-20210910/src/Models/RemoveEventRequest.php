<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class RemoveEventRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $createType;

    /**
     * @var string
     */
    public $eventCode;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $templateCode;
    protected $_name = [
        'lang'         => 'Lang',
        'createType'   => 'createType',
        'eventCode'    => 'eventCode',
        'id'           => 'id',
        'regId'        => 'regId',
        'templateCode' => 'templateCode',
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
        if (null !== $this->createType) {
            $res['createType'] = $this->createType;
        }
        if (null !== $this->eventCode) {
            $res['eventCode'] = $this->eventCode;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->templateCode) {
            $res['templateCode'] = $this->templateCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveEventRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['createType'])) {
            $model->createType = $map['createType'];
        }
        if (isset($map['eventCode'])) {
            $model->eventCode = $map['eventCode'];
        }
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['templateCode'])) {
            $model->templateCode = $map['templateCode'];
        }

        return $model;
    }
}
