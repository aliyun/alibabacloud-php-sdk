<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainApplicationsResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainApplicationsResponseBody\result\applyHistoryList;
use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeAntChainApplicationsResponseBody\result\pagination;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var applyHistoryList[]
     */
    public $applyHistoryList;

    /**
     * @var pagination
     */
    public $pagination;
    protected $_name = [
        'applyHistoryList' => 'ApplyHistoryList',
        'pagination'       => 'Pagination',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applyHistoryList) {
            $res['ApplyHistoryList'] = [];
            if (null !== $this->applyHistoryList && \is_array($this->applyHistoryList)) {
                $n = 0;
                foreach ($this->applyHistoryList as $item) {
                    $res['ApplyHistoryList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pagination) {
            $res['Pagination'] = null !== $this->pagination ? $this->pagination->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplyHistoryList'])) {
            if (!empty($map['ApplyHistoryList'])) {
                $model->applyHistoryList = [];
                $n                       = 0;
                foreach ($map['ApplyHistoryList'] as $item) {
                    $model->applyHistoryList[$n++] = null !== $item ? applyHistoryList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Pagination'])) {
            $model->pagination = pagination::fromMap($map['Pagination']);
        }

        return $model;
    }
}
