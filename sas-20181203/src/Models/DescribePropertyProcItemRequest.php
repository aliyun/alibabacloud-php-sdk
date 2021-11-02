<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyProcItemRequest extends Model
{
    /**
     * @var int
     */
    public $currentPage;

    /**
     * @var bool
     */
    public $forceFlush;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'forceFlush'  => 'ForceFlush',
        'name'        => 'Name',
        'pageSize'    => 'PageSize',
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
        if (null !== $this->forceFlush) {
            $res['ForceFlush'] = $this->forceFlush;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyProcItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['ForceFlush'])) {
            $model->forceFlush = $map['ForceFlush'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
