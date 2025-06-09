<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class LogGroupList extends Model
{
    /**
     * @var LogGroup[]
     */
    public $logGroupList;
    protected $_name = [
        'logGroupList' => 'logGroupList',
    ];

    public function validate()
    {
        if (\is_array($this->logGroupList)) {
            Model::validateArray($this->logGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logGroupList) {
            if (\is_array($this->logGroupList)) {
                $res['logGroupList'] = [];
                $n1 = 0;
                foreach ($this->logGroupList as $item1) {
                    $res['logGroupList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['logGroupList'])) {
            if (!empty($map['logGroupList'])) {
                $model->logGroupList = [];
                $n1 = 0;
                foreach ($map['logGroupList'] as $item1) {
                    $model->logGroupList[$n1++] = LogGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
