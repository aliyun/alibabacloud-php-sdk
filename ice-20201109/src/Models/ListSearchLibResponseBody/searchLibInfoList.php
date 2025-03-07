<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibResponseBody\searchLibInfoList\indexInfo;
use AlibabaCloud\Tea\Model;

class searchLibInfoList extends Model
{
    /**
     * @var indexInfo[]
     */
    public $indexInfo;

    /**
     * @description The search library.
     *
     * @example faceSearchLib
     *
     * @var string
     */
    public $searchLibName;

    /**
     * @description The status of the search library.
     *
     *   normal
     *   deleting
     *   deleteFail
     *
     * @example normal
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'indexInfo'     => 'IndexInfo',
        'searchLibName' => 'SearchLibName',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->indexInfo) {
            $res['IndexInfo'] = [];
            if (null !== $this->indexInfo && \is_array($this->indexInfo)) {
                $n = 0;
                foreach ($this->indexInfo as $item) {
                    $res['IndexInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->searchLibName) {
            $res['SearchLibName'] = $this->searchLibName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchLibInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexInfo'])) {
            if (!empty($map['IndexInfo'])) {
                $model->indexInfo = [];
                $n                = 0;
                foreach ($map['IndexInfo'] as $item) {
                    $model->indexInfo[$n++] = null !== $item ? indexInfo::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SearchLibName'])) {
            $model->searchLibName = $map['SearchLibName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
