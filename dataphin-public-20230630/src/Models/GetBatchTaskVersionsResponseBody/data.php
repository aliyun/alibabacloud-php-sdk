<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskVersionsResponseBody;

use AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\GetBatchTaskVersionsResponseBody\data\batchTaskVersionList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var batchTaskVersionList[]
     */
    public $batchTaskVersionList;
    protected $_name = [
        'batchTaskVersionList' => 'BatchTaskVersionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->batchTaskVersionList) {
            $res['BatchTaskVersionList'] = [];
            if (null !== $this->batchTaskVersionList && \is_array($this->batchTaskVersionList)) {
                $n = 0;
                foreach ($this->batchTaskVersionList as $item) {
                    $res['BatchTaskVersionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BatchTaskVersionList'])) {
            if (!empty($map['BatchTaskVersionList'])) {
                $model->batchTaskVersionList = [];
                $n                           = 0;
                foreach ($map['BatchTaskVersionList'] as $item) {
                    $model->batchTaskVersionList[$n++] = null !== $item ? batchTaskVersionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
