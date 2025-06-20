<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryCheckInfoResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Safe\V20220117\Models\QueryCheckInfoResponseBody\data\checkDetailList;

class data extends Model
{
    /**
     * @var checkDetailList[]
     */
    public $checkDetailList;

    /**
     * @var string
     */
    public $checkResultUrl;
    protected $_name = [
        'checkDetailList' => 'CheckDetailList',
        'checkResultUrl' => 'CheckResultUrl',
    ];

    public function validate()
    {
        if (\is_array($this->checkDetailList)) {
            Model::validateArray($this->checkDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->checkDetailList) {
            if (\is_array($this->checkDetailList)) {
                $res['CheckDetailList'] = [];
                $n1 = 0;
                foreach ($this->checkDetailList as $item1) {
                    $res['CheckDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->checkResultUrl) {
            $res['CheckResultUrl'] = $this->checkResultUrl;
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
        if (isset($map['CheckDetailList'])) {
            if (!empty($map['CheckDetailList'])) {
                $model->checkDetailList = [];
                $n1 = 0;
                foreach ($map['CheckDetailList'] as $item1) {
                    $model->checkDetailList[$n1] = checkDetailList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CheckResultUrl'])) {
            $model->checkResultUrl = $map['CheckResultUrl'];
        }

        return $model;
    }
}
