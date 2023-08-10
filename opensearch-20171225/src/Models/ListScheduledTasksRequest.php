<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Tea\Model;

class ListScheduledTasksRequest extends Model
{
    /**
     * @description 1
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description 10
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description wipe
     *
     * @example wipe
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'pageNumber' => 'pageNumber',
        'pageSize'   => 'pageSize',
        'type'       => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListScheduledTasksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
