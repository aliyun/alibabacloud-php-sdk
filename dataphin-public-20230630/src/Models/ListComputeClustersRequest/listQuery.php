<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ListComputeClustersRequest;

use AlibabaCloud\Dara\Model;

class listQuery extends Model
{
    /**
     * @var string
     */
    public $keyword;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $typeVersionList;
    protected $_name = [
        'keyword' => 'Keyword',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'typeVersionList' => 'TypeVersionList',
    ];

    public function validate()
    {
        if (\is_array($this->typeVersionList)) {
            Model::validateArray($this->typeVersionList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keyword) {
            $res['Keyword'] = $this->keyword;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->typeVersionList) {
            if (\is_array($this->typeVersionList)) {
                $res['TypeVersionList'] = [];
                $n1 = 0;
                foreach ($this->typeVersionList as $item1) {
                    $res['TypeVersionList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['Keyword'])) {
            $model->keyword = $map['Keyword'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['TypeVersionList'])) {
            if (!empty($map['TypeVersionList'])) {
                $model->typeVersionList = [];
                $n1 = 0;
                foreach ($map['TypeVersionList'] as $item1) {
                    $model->typeVersionList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
