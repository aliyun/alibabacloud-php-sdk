<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyPortItemRequest extends Model
{
    /**
     * @description The number of entries to return on each page.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The port number.
     *
     * @example true
     *
     * @var bool
     */
    public $forceFlush;

    /**
     * @description The ID of the request.
     *
     * @example 5
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The number of the page to return.
     *
     * @example 22
     *
     * @var string
     */
    public $port;
    protected $_name = [
        'currentPage' => 'CurrentPage',
        'forceFlush'  => 'ForceFlush',
        'pageSize'    => 'PageSize',
        'port'        => 'Port',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyPortItemRequest
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
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        return $model;
    }
}
