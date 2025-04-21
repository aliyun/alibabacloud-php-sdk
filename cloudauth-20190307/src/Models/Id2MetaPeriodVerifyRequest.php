<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class Id2MetaPeriodVerifyRequest extends Model
{
    /**
     * @var string
     */
    public $identifyNum;

    /**
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $validityEndDate;

    /**
     * @var string
     */
    public $validityStartDate;
    protected $_name = [
        'identifyNum' => 'IdentifyNum',
        'paramType' => 'ParamType',
        'userName' => 'UserName',
        'validityEndDate' => 'ValidityEndDate',
        'validityStartDate' => 'ValidityStartDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->identifyNum) {
            $res['IdentifyNum'] = $this->identifyNum;
        }

        if (null !== $this->paramType) {
            $res['ParamType'] = $this->paramType;
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->validityEndDate) {
            $res['ValidityEndDate'] = $this->validityEndDate;
        }

        if (null !== $this->validityStartDate) {
            $res['ValidityStartDate'] = $this->validityStartDate;
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
        if (isset($map['IdentifyNum'])) {
            $model->identifyNum = $map['IdentifyNum'];
        }

        if (isset($map['ParamType'])) {
            $model->paramType = $map['ParamType'];
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['ValidityEndDate'])) {
            $model->validityEndDate = $map['ValidityEndDate'];
        }

        if (isset($map['ValidityStartDate'])) {
            $model->validityStartDate = $map['ValidityStartDate'];
        }

        return $model;
    }
}
