<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsResponseBody\domainLogDetails\domainLogDetail;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDomainLogsResponseBody\domainLogDetails\domainLogDetail\pageInfos\pageInfoDetail;
use AlibabaCloud\Tea\Model;

class pageInfos extends Model
{
    /**
     * @var pageInfoDetail[]
     */
    public $pageInfoDetail;
    protected $_name = [
        'pageInfoDetail' => 'PageInfoDetail',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageInfoDetail) {
            $res['PageInfoDetail'] = [];
            if (null !== $this->pageInfoDetail && \is_array($this->pageInfoDetail)) {
                $n = 0;
                foreach ($this->pageInfoDetail as $item) {
                    $res['PageInfoDetail'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageInfoDetail'])) {
            if (!empty($map['PageInfoDetail'])) {
                $model->pageInfoDetail = [];
                $n                     = 0;
                foreach ($map['PageInfoDetail'] as $item) {
                    $model->pageInfoDetail[$n++] = null !== $item ? pageInfoDetail::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
