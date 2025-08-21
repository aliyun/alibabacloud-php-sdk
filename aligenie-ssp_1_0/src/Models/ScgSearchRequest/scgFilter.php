<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter\offSetParam;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter\pageParam;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ScgSearchRequest\scgFilter\sortParam;

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
        'pageParam' => 'PageParam',
        'sortParam' => 'SortParam',
        'useOffSet' => 'UseOffSet',
    ];

    public function validate()
    {
        if (null !== $this->offSetParam) {
            $this->offSetParam->validate();
        }
        if (null !== $this->pageParam) {
            $this->pageParam->validate();
        }
        if (null !== $this->sortParam) {
            $this->sortParam->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->offSetParam) {
            $res['OffSetParam'] = null !== $this->offSetParam ? $this->offSetParam->toArray($noStream) : $this->offSetParam;
        }

        if (null !== $this->pageParam) {
            $res['PageParam'] = null !== $this->pageParam ? $this->pageParam->toArray($noStream) : $this->pageParam;
        }

        if (null !== $this->sortParam) {
            $res['SortParam'] = null !== $this->sortParam ? $this->sortParam->toArray($noStream) : $this->sortParam;
        }

        if (null !== $this->useOffSet) {
            $res['UseOffSet'] = $this->useOffSet;
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
