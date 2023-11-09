<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeContainerAppsRequest extends Model
{
    /**
     * @example ca0a686115432429ca26cf780f5e9fff5
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @example cas-adad-qeqwe
     *
     * @var string
     */
    public $fieldValue;

    /**
     * @example 200
     *
     * @var int
     */
    public $pageSize;
    protected $_name = [
        'clusterId'   => 'ClusterId',
        'currentPage' => 'CurrentPage',
        'fieldValue'  => 'FieldValue',
        'pageSize'    => 'PageSize',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->fieldValue) {
            $res['FieldValue'] = $this->fieldValue;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeContainerAppsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['FieldValue'])) {
            $model->fieldValue = $map['FieldValue'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        return $model;
    }
}
