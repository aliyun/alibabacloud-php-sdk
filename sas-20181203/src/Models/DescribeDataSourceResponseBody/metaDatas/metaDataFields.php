<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody\metaDatas;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeDataSourceResponseBody\metaDatas\metaDataFields\operatorList;
use AlibabaCloud\Tea\Model;

class metaDataFields extends Model
{
    /**
     * @description The key of the field.
     *
     * @example type
     *
     * @var string
     */
    public $filed;

    /**
     * @description The name of the field.
     *
     * @example dingtalk_vul_type
     *
     * @var string
     */
    public $filedName;

    /**
     * @description The operators.
     *
     * @var operatorList[]
     */
    public $operatorList;

    /**
     * @description The sample field.
     *
     * @example all:dingtalk_all;cms:dingtalk_vul_cms;oval:dingtalk_vul_cve;sys:dingtalk_vul_sys;emg:dingtalk_vul_emg
     *
     * @var string
     */
    public $sample;

    /**
     * @description The value type of the field.
     *
     * @example string
     *
     * @var string
     */
    public $valueType;
    protected $_name = [
        'filed'        => 'Filed',
        'filedName'    => 'FiledName',
        'operatorList' => 'OperatorList',
        'sample'       => 'Sample',
        'valueType'    => 'ValueType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->filed) {
            $res['Filed'] = $this->filed;
        }
        if (null !== $this->filedName) {
            $res['FiledName'] = $this->filedName;
        }
        if (null !== $this->operatorList) {
            $res['OperatorList'] = [];
            if (null !== $this->operatorList && \is_array($this->operatorList)) {
                $n = 0;
                foreach ($this->operatorList as $item) {
                    $res['OperatorList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sample) {
            $res['Sample'] = $this->sample;
        }
        if (null !== $this->valueType) {
            $res['ValueType'] = $this->valueType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return metaDataFields
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filed'])) {
            $model->filed = $map['Filed'];
        }
        if (isset($map['FiledName'])) {
            $model->filedName = $map['FiledName'];
        }
        if (isset($map['OperatorList'])) {
            if (!empty($map['OperatorList'])) {
                $model->operatorList = [];
                $n                   = 0;
                foreach ($map['OperatorList'] as $item) {
                    $model->operatorList[$n++] = null !== $item ? operatorList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Sample'])) {
            $model->sample = $map['Sample'];
        }
        if (isset($map['ValueType'])) {
            $model->valueType = $map['ValueType'];
        }

        return $model;
    }
}
