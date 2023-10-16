<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdnSecFuncInfoRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example CipherSuiteGroupCustomize
     *
     * @var string
     */
    public $secFuncType;
    protected $_name = [
        'lang'        => 'Lang',
        'secFuncType' => 'SecFuncType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->secFuncType) {
            $res['SecFuncType'] = $this->secFuncType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnSecFuncInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['SecFuncType'])) {
            $model->secFuncType = $map['SecFuncType'];
        }

        return $model;
    }
}
