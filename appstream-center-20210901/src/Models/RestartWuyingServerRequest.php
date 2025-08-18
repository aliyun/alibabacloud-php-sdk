<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Dara\Model;

class RestartWuyingServerRequest extends Model
{
    /**
     * @var string[]
     */
    public $wuyingServerIdList;
    protected $_name = [
        'wuyingServerIdList' => 'WuyingServerIdList',
    ];

    public function validate()
    {
        if (\is_array($this->wuyingServerIdList)) {
            Model::validateArray($this->wuyingServerIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->wuyingServerIdList) {
            if (\is_array($this->wuyingServerIdList)) {
                $res['WuyingServerIdList'] = [];
                $n1 = 0;
                foreach ($this->wuyingServerIdList as $item1) {
                    $res['WuyingServerIdList'][$n1] = $item1;
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
        if (isset($map['WuyingServerIdList'])) {
            if (!empty($map['WuyingServerIdList'])) {
                $model->wuyingServerIdList = [];
                $n1 = 0;
                foreach ($map['WuyingServerIdList'] as $item1) {
                    $model->wuyingServerIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
