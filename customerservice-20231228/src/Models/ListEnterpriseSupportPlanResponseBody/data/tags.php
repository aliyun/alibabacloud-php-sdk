<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CustomerService\V20231228\Models\ListEnterpriseSupportPlanResponseBody\data;

use AlibabaCloud\Dara\Model;

class tags extends Model
{
    /**
     * @var string[]
     */
    public $extendInfos;

    /**
     * @var bool
     */
    public $show;

    /**
     * @var string
     */
    public $tagCode;

    /**
     * @var string
     */
    public $tagName;
    protected $_name = [
        'extendInfos' => 'extendInfos',
        'show' => 'show',
        'tagCode' => 'tagCode',
        'tagName' => 'tagName',
    ];

    public function validate()
    {
        if (\is_array($this->extendInfos)) {
            Model::validateArray($this->extendInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendInfos) {
            if (\is_array($this->extendInfos)) {
                $res['extendInfos'] = [];
                $n1 = 0;
                foreach ($this->extendInfos as $item1) {
                    $res['extendInfos'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->show) {
            $res['show'] = $this->show;
        }

        if (null !== $this->tagCode) {
            $res['tagCode'] = $this->tagCode;
        }

        if (null !== $this->tagName) {
            $res['tagName'] = $this->tagName;
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
        if (isset($map['extendInfos'])) {
            if (!empty($map['extendInfos'])) {
                $model->extendInfos = [];
                $n1 = 0;
                foreach ($map['extendInfos'] as $item1) {
                    $model->extendInfos[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['show'])) {
            $model->show = $map['show'];
        }

        if (isset($map['tagCode'])) {
            $model->tagCode = $map['tagCode'];
        }

        if (isset($map['tagName'])) {
            $model->tagName = $map['tagName'];
        }

        return $model;
    }
}
