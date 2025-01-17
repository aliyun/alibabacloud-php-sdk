<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoicesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListCustomizedVoicesResponseBody\data\customizedVoiceList;

class data extends Model
{
    /**
     * @var customizedVoiceList[]
     */
    public $customizedVoiceList;
    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'customizedVoiceList' => 'CustomizedVoiceList',
        'totalCount'          => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->customizedVoiceList)) {
            Model::validateArray($this->customizedVoiceList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->customizedVoiceList) {
            if (\is_array($this->customizedVoiceList)) {
                $res['CustomizedVoiceList'] = [];
                $n1                         = 0;
                foreach ($this->customizedVoiceList as $item1) {
                    $res['CustomizedVoiceList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['CustomizedVoiceList'])) {
            if (!empty($map['CustomizedVoiceList'])) {
                $model->customizedVoiceList = [];
                $n1                         = 0;
                foreach ($map['CustomizedVoiceList'] as $item1) {
                    $model->customizedVoiceList[$n1++] = customizedVoiceList::fromMap($item1);
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
