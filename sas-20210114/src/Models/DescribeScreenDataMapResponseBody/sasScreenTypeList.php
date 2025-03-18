<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody;

use AlibabaCloud\SDK\Sas\V20210114\Models\DescribeScreenDataMapResponseBody\sasScreenTypeList\typeData;
use AlibabaCloud\Tea\Model;

class sasScreenTypeList extends Model
{
    /**
     * @var string
     */
    public $type;

    /**
     * @example ASSETS
     *
     * @var string
     */
    public $typeCode;

    /**
     * @var typeData[]
     */
    public $typeData;
    protected $_name = [
        'type' => 'Type',
        'typeCode' => 'TypeCode',
        'typeData' => 'TypeData',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->typeCode) {
            $res['TypeCode'] = $this->typeCode;
        }
        if (null !== $this->typeData) {
            $res['TypeData'] = [];
            if (null !== $this->typeData && \is_array($this->typeData)) {
                $n = 0;
                foreach ($this->typeData as $item) {
                    $res['TypeData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sasScreenTypeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['TypeCode'])) {
            $model->typeCode = $map['TypeCode'];
        }
        if (isset($map['TypeData'])) {
            if (!empty($map['TypeData'])) {
                $model->typeData = [];
                $n = 0;
                foreach ($map['TypeData'] as $item) {
                    $model->typeData[$n++] = null !== $item ? typeData::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
