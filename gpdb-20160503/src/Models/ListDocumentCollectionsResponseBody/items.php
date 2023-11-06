<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentCollectionsResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentCollectionsResponseBody\items\collectionList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var collectionList[]
     */
    public $collectionList;
    protected $_name = [
        'collectionList' => 'CollectionList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->collectionList) {
            $res['CollectionList'] = [];
            if (null !== $this->collectionList && \is_array($this->collectionList)) {
                $n = 0;
                foreach ($this->collectionList as $item) {
                    $res['CollectionList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CollectionList'])) {
            if (!empty($map['CollectionList'])) {
                $model->collectionList = [];
                $n                     = 0;
                foreach ($map['CollectionList'] as $item) {
                    $model->collectionList[$n++] = null !== $item ? collectionList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
