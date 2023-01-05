<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLocalFileUploadJobResponseBody;

use AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryLocalFileUploadJobResponseBody\data\resultList;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var resultList[]
     */
    public $resultList;

    /**
     * @example 2
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'resultList' => 'ResultList',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resultList) {
            $res['ResultList'] = [];
            if (null !== $this->resultList && \is_array($this->resultList)) {
                $n = 0;
                foreach ($this->resultList as $item) {
                    $res['ResultList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ResultList'])) {
            if (!empty($map['ResultList'])) {
                $model->resultList = [];
                $n                 = 0;
                foreach ($map['ResultList'] as $item) {
                    $model->resultList[$n++] = null !== $item ? resultList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
