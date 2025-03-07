<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentsResponseBody;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\ListDocumentsResponseBody\items\documentList;
use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var documentList[]
     */
    public $documentList;
    protected $_name = [
        'documentList' => 'DocumentList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->documentList) {
            $res['DocumentList'] = [];
            if (null !== $this->documentList && \is_array($this->documentList)) {
                $n = 0;
                foreach ($this->documentList as $item) {
                    $res['DocumentList'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (isset($map['DocumentList'])) {
            if (!empty($map['DocumentList'])) {
                $model->documentList = [];
                $n                   = 0;
                foreach ($map['DocumentList'] as $item) {
                    $model->documentList[$n++] = null !== $item ? documentList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
