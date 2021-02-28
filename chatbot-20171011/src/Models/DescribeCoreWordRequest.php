<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Chatbot\V20171011\Models;

use AlibabaCloud\Tea\Model;

class DescribeCoreWordRequest extends Model
{
    /**
     * @var string
     */
    public $coreWordName;
    protected $_name = [
        'coreWordName' => 'CoreWordName',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCoreWordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoreWordName'])) {
            $model->coreWordName = $map['CoreWordName'];
        }

        return $model;
    }
}
