<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribeFieldRequest extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $lang;

    /**
     * @example soar_filed_tags
     *
     * @var string
     */
    public $queryKey;
    protected $_name = [
        'lang'     => 'Lang',
        'queryKey' => 'QueryKey',
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
        if (null !== $this->queryKey) {
            $res['QueryKey'] = $this->queryKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeFieldRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['QueryKey'])) {
            $model->queryKey = $map['QueryKey'];
        }

        return $model;
    }
}
