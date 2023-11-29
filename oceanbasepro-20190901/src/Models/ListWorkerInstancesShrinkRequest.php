<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ListWorkerInstancesShrinkRequest extends Model
{
    /**
     * @example KAFKA
     *
     * @var string
     */
    public $destType;

    /**
     * @example i4katz****
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example true
     *
     * @var bool
     */
    public $onlyBindable;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example OCEANBASE
     *
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $specsShrink;
    protected $_name = [
        'destType'     => 'DestType',
        'instanceName' => 'InstanceName',
        'onlyBindable' => 'OnlyBindable',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'sourceType'   => 'SourceType',
        'specsShrink'  => 'Specs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destType) {
            $res['DestType'] = $this->destType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->onlyBindable) {
            $res['OnlyBindable'] = $this->onlyBindable;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->specsShrink) {
            $res['Specs'] = $this->specsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkerInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestType'])) {
            $model->destType = $map['DestType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['OnlyBindable'])) {
            $model->onlyBindable = $map['OnlyBindable'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Specs'])) {
            $model->specsShrink = $map['Specs'];
        }

        return $model;
    }
}
