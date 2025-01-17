<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

class DescribePropertyCronItemRequest extends Model
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
     * @var int
     */
    public $pageSize;
    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'forceFlush'  => 'ForceFlush',
        'pageSize'    => 'PageSize',
        'source'      => 'Source',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }

        if (null !== $this->forceFlush) {
            $res['ForceFlush'] = $this->forceFlush;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->source) {
            $res['Source'] = $this->source;
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
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }

        if (isset($map['ForceFlush'])) {
            $model->forceFlush = $map['ForceFlush'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
