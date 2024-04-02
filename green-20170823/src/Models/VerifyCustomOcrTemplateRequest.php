<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20170823\Models;

use AlibabaCloud\Tea\Model;

class VerifyCustomOcrTemplateRequest extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $testImgUrl;
    protected $_name = [
        'id'         => 'Id',
        'testImgUrl' => 'TestImgUrl',
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
        if (null !== $this->testImgUrl) {
            $res['TestImgUrl'] = $this->testImgUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return VerifyCustomOcrTemplateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TestImgUrl'])) {
            $model->testImgUrl = $map['TestImgUrl'];
        }

        return $model;
    }
}
