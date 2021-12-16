<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnSecFuncInfoRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $secFuncType;
    protected $_name = [
        'lang'        => 'Lang',
        'ownerId'     => 'OwnerId',
        'secFuncType' => 'SecFuncType',
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
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->secFuncType) {
            $res['SecFuncType'] = $this->secFuncType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnSecFuncInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['SecFuncType'])) {
            $model->secFuncType = $map['SecFuncType'];
        }

        return $model;
    }
}
