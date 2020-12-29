<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\SearchRetcodeAppByPageResponseBody\pageBean\retcodeApps;
use AlibabaCloud\Tea\Model;

class pageBean extends Model
{
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

    /**
     * @var retcodeApps[]
     */
    public $retcodeApps;
    protected $_name = [
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'totalCount'  => 'TotalCount',
        'retcodeApps' => 'RetcodeApps',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->retcodeApps) {
            $res['RetcodeApps'] = [];
            if (null !== $this->retcodeApps && \is_array($this->retcodeApps)) {
                $n = 0;
                foreach ($this->retcodeApps as $item) {
                    $res['RetcodeApps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageBean
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RetcodeApps'])) {
            if (!empty($map['RetcodeApps'])) {
                $model->retcodeApps = [];
                $n                  = 0;
                foreach ($map['RetcodeApps'] as $item) {
                    $model->retcodeApps[$n++] = null !== $item ? retcodeApps::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
