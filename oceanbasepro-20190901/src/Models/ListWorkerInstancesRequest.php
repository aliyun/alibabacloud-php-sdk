<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ListWorkerInstancesRequest extends Model
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
     * @var string[]
     */
    public $specs;
    protected $_name = [
        'destType'     => 'DestType',
        'instanceName' => 'InstanceName',
        'onlyBindable' => 'OnlyBindable',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'sourceType'   => 'SourceType',
        'specs'        => 'Specs',
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
        if (null !== $this->specs) {
            $res['Specs'] = $this->specs;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListWorkerInstancesRequest
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
            if (!empty($map['Specs'])) {
                $model->specs = $map['Specs'];
            }
        }

        return $model;
    }
}
