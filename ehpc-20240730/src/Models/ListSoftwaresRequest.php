<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\SDK\EHPC\V20240730\Models\ListSoftwaresRequest\osInfos;
use AlibabaCloud\Tea\Model;

class ListSoftwaresRequest extends Model
{
    /**
     * @description The application category.
     *
     * @example NWP
     *
     * @var string
     */
    public $category;

    /**
     * @description The cluster ID.
     *
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The software name.
     *
     * @example gromacs
     *
     * @var string
     */
    public $name;

    /**
     * @description The operating system (OS) information.
     *
     * @var osInfos[]
     */
    public $osInfos;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var string
     */
    public $pageSize;
    protected $_name = [
        'category'   => 'Category',
        'clusterId'  => 'ClusterId',
        'name'       => 'Name',
        'osInfos'    => 'OsInfos',
        'pageNumber' => 'PageNumber',
        'pageSize'   => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->osInfos) {
            $res['OsInfos'] = [];
            if (null !== $this->osInfos && \is_array($this->osInfos)) {
                $n = 0;
                foreach ($this->osInfos as $item) {
                    $res['OsInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSoftwaresRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OsInfos'])) {
            if (!empty($map['OsInfos'])) {
                $model->osInfos = [];
                $n              = 0;
                foreach ($map['OsInfos'] as $item) {
                    $model->osInfos[$n++] = null !== $item ? osInfos::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
