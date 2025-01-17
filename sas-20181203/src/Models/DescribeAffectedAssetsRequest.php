<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribeAffectedAssetsRequest extends Model
{
    /**
     * @var string
     */
    public $current;
    /**
     * @var string
     */
    public $levels;
    /**
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'current'  => 'Current',
        'levels'   => 'Levels',
        'pageSize' => 'PageSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->current) {
            $res['Current'] = $this->current;
        }

        if (null !== $this->levels) {
            $res['Levels'] = $this->levels;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
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
        if (isset($map['Current'])) {
            $model->current = $map['Current'];
        }

        if (isset($map['Levels'])) {
            $model->levels = $map['Levels'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
