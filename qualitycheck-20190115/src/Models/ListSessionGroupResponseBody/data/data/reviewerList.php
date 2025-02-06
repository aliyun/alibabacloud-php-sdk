<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qualitycheck\V20190115\Models\ListSessionGroupResponseBody\data\data;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->reviewerList)) {
            Model::validateArray($this->reviewerList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->reviewerList) {
            if (\is_array($this->reviewerList)) {
                $res['ReviewerList'] = [];
                $n1                  = 0;
                foreach ($this->reviewerList as $item1) {
                    $res['ReviewerList'][$n1++] = $item1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ReviewerList'])) {
            if (!empty($map['ReviewerList'])) {
                $model->reviewerList = [];
                $n1                  = 0;
                foreach ($map['ReviewerList'] as $item1) {
                    $model->reviewerList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
