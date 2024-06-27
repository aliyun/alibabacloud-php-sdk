<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtee\V20210910\Models;

use AlibabaCloud\Tea\Model;

class ModifyEventStatusRequest extends Model
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
     * @var string
     */
    public $fromEventSatus;

    /**
     * @var string
     */
    public $regId;

    /**
     * @var string
     */
    public $toEventSatus;
    protected $_name = [
        'lang'           => 'Lang',
        'createType'     => 'createType',
        'eventCode'      => 'eventCode',
        'fromEventSatus' => 'fromEventSatus',
        'regId'          => 'regId',
        'toEventSatus'   => 'toEventSatus',
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
        if (null !== $this->fromEventSatus) {
            $res['fromEventSatus'] = $this->fromEventSatus;
        }
        if (null !== $this->regId) {
            $res['regId'] = $this->regId;
        }
        if (null !== $this->toEventSatus) {
            $res['toEventSatus'] = $this->toEventSatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyEventStatusRequest
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
        if (isset($map['fromEventSatus'])) {
            $model->fromEventSatus = $map['fromEventSatus'];
        }
        if (isset($map['regId'])) {
            $model->regId = $map['regId'];
        }
        if (isset($map['toEventSatus'])) {
            $model->toEventSatus = $map['toEventSatus'];
        }

        return $model;
    }
}
