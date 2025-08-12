<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\filterSetting\blackList;
use AlibabaCloud\SDK\Cms\V20190101\Models\NotificationStrategy\filterSetting\whiteList;

class filterSetting extends Model
{
    /**
     * @var blackList[][]
     */
    public $blackList;

    /**
     * @var whiteList[][]
     */
    public $whiteList;
    protected $_name = [
        'blackList' => 'BlackList',
        'whiteList' => 'WhiteList',
    ];

    public function validate()
    {
        if (\is_array($this->blackList)) {
            Model::validateArray($this->blackList);
        }
        if (\is_array($this->whiteList)) {
            Model::validateArray($this->whiteList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->blackList) {
            if (\is_array($this->blackList)) {
                $res['BlackList'] = [];
                $n1 = 0;
                foreach ($this->blackList as $item1) {
                    if (\is_array($item1)) {
                        $res['BlackList'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['BlackList'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (null !== $this->whiteList) {
            if (\is_array($this->whiteList)) {
                $res['WhiteList'] = [];
                $n1 = 0;
                foreach ($this->whiteList as $item1) {
                    if (\is_array($item1)) {
                        $res['WhiteList'][$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $res['WhiteList'][$n1][$n2] = null !== $item2 ? $item2->toArray($noStream) : $item2;
                            ++$n2;
                        }
                    }
                    ++$n1;
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
        if (isset($map['BlackList'])) {
            if (!empty($map['BlackList'])) {
                $model->blackList = [];
                $n1 = 0;
                foreach ($map['BlackList'] as $item1) {
                    if (!empty($item1)) {
                        $model->blackList[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->blackList[$n1][$n2] = blackList::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        if (isset($map['WhiteList'])) {
            if (!empty($map['WhiteList'])) {
                $model->whiteList = [];
                $n1 = 0;
                foreach ($map['WhiteList'] as $item1) {
                    if (!empty($item1)) {
                        $model->whiteList[$n1] = [];
                        $n2 = 0;
                        foreach ($item1 as $item2) {
                            $model->whiteList[$n1][$n2] = whiteList::fromMap($item2);
                            ++$n2;
                        }
                    }
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
