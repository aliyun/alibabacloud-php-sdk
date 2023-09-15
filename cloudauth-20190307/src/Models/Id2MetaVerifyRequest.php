<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Tea\Model;

class Id2MetaVerifyRequest extends Model
{
    /**
     * @example 412722198610274919
     *
     * @var string
     */
    public $identifyNum;

    /**
     * @example normal
     *
     * @var string
     */
    public $paramType;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'identifyNum' => 'IdentifyNum',
        'paramType'   => 'ParamType',
        'userName'    => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Id2MetaVerifyRequest
     */
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

        return $model;
    }
}
