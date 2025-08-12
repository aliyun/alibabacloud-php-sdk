<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\createResultList\createResultList;

class createResultList extends Model
{
    /**
     * @var createResultList[]
     */
    public $createResultList;
    protected $_name = [
        'createResultList' => 'CreateResultList',
    ];

    public function validate()
    {
        if (\is_array($this->createResultList)) {
            Model::validateArray($this->createResultList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createResultList) {
            if (\is_array($this->createResultList)) {
                $res['CreateResultList'] = [];
                $n1 = 0;
                foreach ($this->createResultList as $item1) {
                    $res['CreateResultList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['CreateResultList'])) {
            if (!empty($map['CreateResultList'])) {
                $model->createResultList = [];
                $n1 = 0;
                foreach ($map['CreateResultList'] as $item1) {
                    $model->createResultList[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
