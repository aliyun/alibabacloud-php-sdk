<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListSensitiveWordResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var string[]
     */
    public $wordList;
    protected $_name = [
        'wordList' => 'WordList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->wordList) {
            $res['WordList'] = $this->wordList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WordList'])) {
            if (!empty($map['WordList'])) {
                $model->wordList = $map['WordList'];
            }
        }

        return $model;
    }
}
