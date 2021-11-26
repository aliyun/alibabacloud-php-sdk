<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\ListLogConfigsResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\ListLogConfigsResponseBody\data\logConfigs;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var logConfigs[]
     */
    public $logConfigs;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $totalSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'logConfigs'  => 'LogConfigs',
        'pageSize'    => 'PageSize',
        'totalSize'   => 'TotalSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->logConfigs) {
            $res['LogConfigs'] = [];
            if (null !== $this->logConfigs && \is_array($this->logConfigs)) {
                $n = 0;
                foreach ($this->logConfigs as $item) {
                    $res['LogConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['LogConfigs'])) {
            if (!empty($map['LogConfigs'])) {
                $model->logConfigs = [];
                $n                 = 0;
                foreach ($map['LogConfigs'] as $item) {
                    $model->logConfigs[$n++] = null !== $item ? logConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }

        return $model;
    }
}
