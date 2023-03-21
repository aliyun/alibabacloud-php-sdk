<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\basicData;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\columns;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\pageInfo;
use AlibabaCloud\Tea\Model;

class ListCheckInstanceResultResponseBody extends Model
{
    /**
     * @var basicData[]
     */
    public $basicData;

    /**
     * @var mixed[][]
     */
    public $checks;

    /**
     * @var columns[]
     */
    public $columns;

    /**
     * @var pageInfo
     */
    public $pageInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'basicData' => 'BasicData',
        'checks'    => 'Checks',
        'columns'   => 'Columns',
        'pageInfo'  => 'PageInfo',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->basicData) {
            $res['BasicData'] = [];
            if (null !== $this->basicData && \is_array($this->basicData)) {
                $n = 0;
                foreach ($this->basicData as $item) {
                    $res['BasicData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->checks) {
            $res['Checks'] = $this->checks;
        }
        if (null !== $this->columns) {
            $res['Columns'] = [];
            if (null !== $this->columns && \is_array($this->columns)) {
                $n = 0;
                foreach ($this->columns as $item) {
                    $res['Columns'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCheckInstanceResultResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BasicData'])) {
            if (!empty($map['BasicData'])) {
                $model->basicData = [];
                $n                = 0;
                foreach ($map['BasicData'] as $item) {
                    $model->basicData[$n++] = null !== $item ? basicData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Checks'])) {
            if (!empty($map['Checks'])) {
                $model->checks = $map['Checks'];
            }
        }
        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n              = 0;
                foreach ($map['Columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageInfo'])) {
            $model->pageInfo = pageInfo::fromMap($map['PageInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
