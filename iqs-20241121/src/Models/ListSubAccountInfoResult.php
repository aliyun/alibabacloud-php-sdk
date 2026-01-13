<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\IQS\V20241121\Models\ListSubAccountInfoResult\subAccountInfos;

class ListSubAccountInfoResult extends Model
{
    /**
     * @var subAccountInfos[]
     */
    public $subAccountInfos;
    protected $_name = [
        'subAccountInfos' => 'subAccountInfos',
    ];

    public function validate()
    {
        if (\is_array($this->subAccountInfos)) {
            Model::validateArray($this->subAccountInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->subAccountInfos) {
            if (\is_array($this->subAccountInfos)) {
                $res['subAccountInfos'] = [];
                $n1 = 0;
                foreach ($this->subAccountInfos as $item1) {
                    $res['subAccountInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['subAccountInfos'])) {
            if (!empty($map['subAccountInfos'])) {
                $model->subAccountInfos = [];
                $n1 = 0;
                foreach ($map['subAccountInfos'] as $item1) {
                    $model->subAccountInfos[$n1] = subAccountInfos::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
