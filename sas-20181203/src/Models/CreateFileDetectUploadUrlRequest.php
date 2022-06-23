<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateFileDetectUploadUrlRequest extends Model
{
    /**
     * @var string[]
     */
    public $hashKeyList;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'hashKeyList' => 'HashKeyList',
        'type'        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hashKeyList) {
            $res['HashKeyList'] = $this->hashKeyList;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileDetectUploadUrlRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HashKeyList'])) {
            if (!empty($map['HashKeyList'])) {
                $model->hashKeyList = $map['HashKeyList'];
            }
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
