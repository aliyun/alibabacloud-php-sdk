<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\basicData;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\columns;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckInstanceResultResponseBody\pageInfo;

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
        if (\is_array($this->basicData)) {
            Model::validateArray($this->basicData);
        }
        if (\is_array($this->checks)) {
            Model::validateArray($this->checks);
        }
        if (\is_array($this->columns)) {
            Model::validateArray($this->columns);
        }
        if (null !== $this->pageInfo) {
            $this->pageInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->basicData) {
            if (\is_array($this->basicData)) {
                $res['BasicData'] = [];
                $n1               = 0;
                foreach ($this->basicData as $item1) {
                    $res['BasicData'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->checks) {
            if (\is_array($this->checks)) {
                $res['Checks'] = [];
                $n1            = 0;
                foreach ($this->checks as $item1) {
                    if (\is_array($item1)) {
                        $res['Checks'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['Checks'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->columns) {
            if (\is_array($this->columns)) {
                $res['Columns'] = [];
                $n1             = 0;
                foreach ($this->columns as $item1) {
                    $res['Columns'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->pageInfo) {
            $res['PageInfo'] = null !== $this->pageInfo ? $this->pageInfo->toArray($noStream) : $this->pageInfo;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['BasicData'])) {
            if (!empty($map['BasicData'])) {
                $model->basicData = [];
                $n1               = 0;
                foreach ($map['BasicData'] as $item1) {
                    $model->basicData[$n1++] = basicData::fromMap($item1);
                }
            }
        }

        if (isset($map['Checks'])) {
            if (!empty($map['Checks'])) {
                $model->checks = [];
                $n1            = 0;
                foreach ($map['Checks'] as $item1) {
                    if (!empty($item1)) {
                        $model->checks[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->checks[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['Columns'])) {
            if (!empty($map['Columns'])) {
                $model->columns = [];
                $n1             = 0;
                foreach ($map['Columns'] as $item1) {
                    $model->columns[$n1++] = columns::fromMap($item1);
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
