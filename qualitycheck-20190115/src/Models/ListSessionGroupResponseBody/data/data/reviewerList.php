<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Tea\Model;

class reviewerList extends Model
{
    /**
     * @var string[]
     */
    public $reviewerList;
    protected $_name = [
        'reviewerList' => 'ReviewerList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->reviewerList) {
            $res['ReviewerList'] = $this->reviewerList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return reviewerList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewerList'])) {
            if (!empty($map['ReviewerList'])) {
                $model->reviewerList = $map['ReviewerList'];
            }
        }

        return $model;
    }
}
