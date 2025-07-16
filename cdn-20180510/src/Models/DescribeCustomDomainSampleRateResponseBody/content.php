<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCustomDomainSampleRateResponseBody;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCustomDomainSampleRateResponseBody\content\domainContent;
use AlibabaCloud\Tea\Model;

class content extends Model
{
    /**
     * @var domainContent[]
     */
    public $domainContent;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'domainContent' => 'DomainContent',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainContent) {
            $res['DomainContent'] = [];
            if (null !== $this->domainContent && \is_array($this->domainContent)) {
                $n = 0;
                foreach ($this->domainContent as $item) {
                    $res['DomainContent'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return content
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainContent'])) {
            if (!empty($map['DomainContent'])) {
                $model->domainContent = [];
                $n = 0;
                foreach ($map['DomainContent'] as $item) {
                    $model->domainContent[$n++] = null !== $item ? domainContent::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
