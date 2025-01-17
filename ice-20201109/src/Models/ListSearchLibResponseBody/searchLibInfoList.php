<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\ListSearchLibResponseBody\searchLibInfoList\indexInfo;

class searchLibInfoList extends Model
{
    /**
     * @var indexInfo[]
     */
    public $indexInfo;
    /**
     * @var string
     */
    public $searchLibName;
    /**
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
        if (\is_array($this->indexInfo)) {
            Model::validateArray($this->indexInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->indexInfo) {
            if (\is_array($this->indexInfo)) {
                $res['IndexInfo'] = [];
                $n1               = 0;
                foreach ($this->indexInfo as $item1) {
                    $res['IndexInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IndexInfo'])) {
            if (!empty($map['IndexInfo'])) {
                $model->indexInfo = [];
                $n1               = 0;
                foreach ($map['IndexInfo'] as $item1) {
                    $model->indexInfo[$n1++] = indexInfo::fromMap($item1);
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
