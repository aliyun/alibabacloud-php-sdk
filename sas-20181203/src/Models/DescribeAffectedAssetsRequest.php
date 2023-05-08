<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeAffectedAssetsRequest extends Model
{
    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var string
     */
    public $current;

    /**
     * @description The severity. Separate multiple severities with commas (,). Valid values:
     *
     *   serious
     *   suspicious
     *   remind
     *
     * @example serious,suspicious,remind
     *
     * @var string
     */
    public $levels;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * > We recommend that you do not leave this parameter empty.
     * @example 10
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeAffectedAssetsRequest
     */
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
