<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListSensitiveWordResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string[]
     */
    public $wordList;
    protected $_name = [
        'totalCount' => 'TotalCount',
        'wordList'   => 'WordList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['WordList'])) {
            if (!empty($map['WordList'])) {
                $model->wordList = $map['WordList'];
            }
        }

        return $model;
    }
}
