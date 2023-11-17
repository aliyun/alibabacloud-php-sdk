<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribePopApiVersionListRequest extends Model
{
    /**
     * @example online
     *
     * @var string
     */
    public $env;

    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example Sas
     *
     * @var string
     */
    public $popCode;
    protected $_name = [
        'env'     => 'Env',
        'lang'    => 'Lang',
        'popCode' => 'PopCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->popCode) {
            $res['PopCode'] = $this->popCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePopApiVersionListRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['PopCode'])) {
            $model->popCode = $map['PopCode'];
        }

        return $model;
    }
}
