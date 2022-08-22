<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter\offSetParam;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter\pageParam;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter\sortParam;
use AlibabaCloud\Tea\Model;

class scgFilter extends Model
{
    /**
     * @var offSetParam
     */
    public $offSetParam;

    /**
     * @var pageParam
     */
    public $pageParam;

    /**
     * @var sortParam
     */
    public $sortParam;

    /**
     * @var bool
     */
    public $useOffSet;
    protected $_name = [
        'offSetParam' => 'OffSetParam',
        'pageParam'   => 'PageParam',
        'sortParam'   => 'SortParam',
        'useOffSet'   => 'UseOffSet',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->offSetParam) {
            $res['OffSetParam'] = null !== $this->offSetParam ? $this->offSetParam->toMap() : null;
        }
        if (null !== $this->pageParam) {
            $res['PageParam'] = null !== $this->pageParam ? $this->pageParam->toMap() : null;
        }
        if (null !== $this->sortParam) {
            $res['SortParam'] = null !== $this->sortParam ? $this->sortParam->toMap() : null;
        }
        if (null !== $this->useOffSet) {
            $res['UseOffSet'] = $this->useOffSet;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scgFilter
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OffSetParam'])) {
            $model->offSetParam = offSetParam::fromMap($map['OffSetParam']);
        }
        if (isset($map['PageParam'])) {
            $model->pageParam = pageParam::fromMap($map['PageParam']);
        }
        if (isset($map['SortParam'])) {
            $model->sortParam = sortParam::fromMap($map['SortParam']);
        }
        if (isset($map['UseOffSet'])) {
            $model->useOffSet = $map['UseOffSet'];
        }

        return $model;
    }
}
