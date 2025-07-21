<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cams\V20200606\Models\ListFlowNodePrototypeV2ResponseBody\data;

use AlibabaCloud\Tea\Model;

class model_ extends Model
{
    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $code;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $groupCode;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $publicExtend;

    /**
     * @example 示例值示例值
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'code' => 'Code',
        'groupCode' => 'GroupCode',
        'publicExtend' => 'PublicExtend',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->groupCode) {
            $res['GroupCode'] = $this->groupCode;
        }
        if (null !== $this->publicExtend) {
            $res['PublicExtend'] = $this->publicExtend;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return model_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['GroupCode'])) {
            $model->groupCode = $map['GroupCode'];
        }
        if (isset($map['PublicExtend'])) {
            $model->publicExtend = $map['PublicExtend'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
