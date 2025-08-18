<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiErrorImpactResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiErrorImpactResponseBody\data\errorApiList;
use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetDataServiceApiErrorImpactResponseBody\data\errorAppList;

class data extends Model
{
    /**
     * @var errorApiList[]
     */
    public $errorApiList;

    /**
     * @var errorAppList[]
     */
    public $errorAppList;
    protected $_name = [
        'errorApiList' => 'ErrorApiList',
        'errorAppList' => 'ErrorAppList',
    ];

    public function validate()
    {
        if (\is_array($this->errorApiList)) {
            Model::validateArray($this->errorApiList);
        }
        if (\is_array($this->errorAppList)) {
            Model::validateArray($this->errorAppList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorApiList) {
            if (\is_array($this->errorApiList)) {
                $res['ErrorApiList'] = [];
                $n1 = 0;
                foreach ($this->errorApiList as $item1) {
                    $res['ErrorApiList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->errorAppList) {
            if (\is_array($this->errorAppList)) {
                $res['ErrorAppList'] = [];
                $n1 = 0;
                foreach ($this->errorAppList as $item1) {
                    $res['ErrorAppList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['ErrorApiList'])) {
            if (!empty($map['ErrorApiList'])) {
                $model->errorApiList = [];
                $n1 = 0;
                foreach ($map['ErrorApiList'] as $item1) {
                    $model->errorApiList[$n1] = errorApiList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ErrorAppList'])) {
            if (!empty($map['ErrorAppList'])) {
                $model->errorAppList = [];
                $n1 = 0;
                foreach ($map['ErrorAppList'] as $item1) {
                    $model->errorAppList[$n1] = errorAppList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
