<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imageprocess\V20200320\Models\SegmentOARResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string[]
     */
    public $maskList;

    /**
     * @var string
     */
    public $resultURL;
    protected $_name = [
        'maskList' => 'MaskList',
        'resultURL' => 'ResultURL',
    ];

    public function validate()
    {
        if (\is_array($this->maskList)) {
            Model::validateArray($this->maskList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->maskList) {
            if (\is_array($this->maskList)) {
                $res['MaskList'] = [];
                $n1 = 0;
                foreach ($this->maskList as $item1) {
                    $res['MaskList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resultURL) {
            $res['ResultURL'] = $this->resultURL;
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
        if (isset($map['MaskList'])) {
            if (!empty($map['MaskList'])) {
                $model->maskList = [];
                $n1 = 0;
                foreach ($map['MaskList'] as $item1) {
                    $model->maskList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResultURL'])) {
            $model->resultURL = $map['ResultURL'];
        }

        return $model;
    }
}
