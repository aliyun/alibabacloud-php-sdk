<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dytnsapi\V20200217\Models\QueryTagInfoBySelectionResponseBody\data\paramList;

use AlibabaCloud\Tea\Model;

class valueDict extends Model
{
    /**
     * @description The English name.
     *
     * @example Aliyun
     *
     * @var string
     */
    public $code;

    /**
     * @description The Chinese name.
     *
     * @example 阿里云
     *
     * @var string
     */
    public $desc;
    protected $_name = [
        'code' => 'Code',
        'desc' => 'Desc',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return valueDict
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }

        return $model;
    }
}
