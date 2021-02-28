<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class UpdateCoreWordRequest extends Model
{
    /**
     * @var string
     */
    public $coreWordName;

    /**
     * @var string
     */
    public $coreWordCode;
    protected $_name = [
        'coreWordName' => 'CoreWordName',
        'coreWordCode' => 'CoreWordCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coreWordName) {
            $res['CoreWordName'] = $this->coreWordName;
        }
        if (null !== $this->coreWordCode) {
            $res['CoreWordCode'] = $this->coreWordCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateCoreWordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }
        if (isset($map['CoreWordCode'])) {
            $model->coreWordCode = $map['CoreWordCode'];
        }

        return $model;
    }
}
