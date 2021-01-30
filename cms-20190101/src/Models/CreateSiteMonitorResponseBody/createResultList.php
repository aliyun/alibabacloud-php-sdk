<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody;

use AlibabaCloud\Tea\Model;

class createResultList extends Model
{
    /**
     * @var \AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\createResultList\createResultList[]
     */
    public $createResultList;
    protected $_name = [
        'createResultList' => 'CreateResultList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createResultList) {
            $res['CreateResultList'] = [];
            if (null !== $this->createResultList && \is_array($this->createResultList)) {
                $n = 0;
                foreach ($this->createResultList as $item) {
                    $res['CreateResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createResultList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateResultList'])) {
            if (!empty($map['CreateResultList'])) {
                $model->createResultList = [];
                $n                       = 0;
                foreach ($map['CreateResultList'] as $item) {
                    $model->createResultList[$n++] = null !== $item ? \AlibabaCloud\SDK\Cms\V20190101\Models\CreateSiteMonitorResponseBody\createResultList\createResultList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
