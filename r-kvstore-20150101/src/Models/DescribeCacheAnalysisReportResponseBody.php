<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Dara\Model;

class DescribeCacheAnalysisReportResponseBody extends Model
{
    /**
     * @var mixed[][]
     */
    public $bigKeys;

    /**
     * @var mixed[][]
     */
    public $hotKeys;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageRecordCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalRecordCount;
    protected $_name = [
        'bigKeys' => 'BigKeys',
        'hotKeys' => 'HotKeys',
        'pageNumber' => 'PageNumber',
        'pageRecordCount' => 'PageRecordCount',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalRecordCount' => 'TotalRecordCount',
    ];

    public function validate()
    {
        if (\is_array($this->bigKeys)) {
            Model::validateArray($this->bigKeys);
        }
        if (\is_array($this->hotKeys)) {
            Model::validateArray($this->hotKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bigKeys) {
            if (\is_array($this->bigKeys)) {
                $res['BigKeys'] = [];
                $n1 = 0;
                foreach ($this->bigKeys as $item1) {
                    if (\is_array($item1)) {
                        $res['BigKeys'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['BigKeys'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->hotKeys) {
            if (\is_array($this->hotKeys)) {
                $res['HotKeys'] = [];
                $n1 = 0;
                foreach ($this->hotKeys as $item1) {
                    if (\is_array($item1)) {
                        $res['HotKeys'][$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $res['HotKeys'][$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageRecordCount) {
            $res['PageRecordCount'] = $this->pageRecordCount;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalRecordCount) {
            $res['TotalRecordCount'] = $this->totalRecordCount;
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
        if (isset($map['BigKeys'])) {
            if (!empty($map['BigKeys'])) {
                $model->bigKeys = [];
                $n1 = 0;
                foreach ($map['BigKeys'] as $item1) {
                    if (!empty($item1)) {
                        $model->bigKeys[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->bigKeys[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['HotKeys'])) {
            if (!empty($map['HotKeys'])) {
                $model->hotKeys = [];
                $n1 = 0;
                foreach ($map['HotKeys'] as $item1) {
                    if (!empty($item1)) {
                        $model->hotKeys[$n1++] = [];
                        foreach ($item1 as $key2 => $value2) {
                            $model->hotKeys[$n1++][$key2] = $value2;
                        }
                    }
                }
            }
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageRecordCount'])) {
            $model->pageRecordCount = $map['PageRecordCount'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalRecordCount'])) {
            $model->totalRecordCount = $map['TotalRecordCount'];
        }

        return $model;
    }
}
