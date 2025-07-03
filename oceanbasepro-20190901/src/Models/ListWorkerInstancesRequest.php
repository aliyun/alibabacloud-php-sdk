<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class ListWorkerInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $destType;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var bool
     */
    public $onlyBindable;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string[]
     */
    public $specs;
    protected $_name = [
        'destType' => 'DestType',
        'instanceName' => 'InstanceName',
        'onlyBindable' => 'OnlyBindable',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'sourceType' => 'SourceType',
        'specs' => 'Specs',
    ];

    public function validate()
    {
        if (\is_array($this->specs)) {
            Model::validateArray($this->specs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->specs)) {
                $res['Specs'] = [];
                $n1 = 0;
                foreach ($this->specs as $item1) {
                    $res['Specs'][$n1] = $item1;
                    ++$n1;
                }
            }
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
                $model->specs = [];
                $n1 = 0;
                foreach ($map['Specs'] as $item1) {
                    $model->specs[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
