<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\CheckAuthCodeBindForExtResponseBody\result;

use AlibabaCloud\Tea\Model;

class userOpenInfo extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $idType;
    protected $_name = [
        'id'     => 'Id',
        'idType' => 'IdType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->idType) {
            $res['IdType'] = $this->idType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userOpenInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IdType'])) {
            $model->idType = $map['IdType'];
        }

        return $model;
    }
}
