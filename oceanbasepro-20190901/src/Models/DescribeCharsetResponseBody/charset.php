<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeCharsetResponseBody;

use AlibabaCloud\Tea\Model;

class charset extends Model
{
    /**
     * @description DescribeCharset
     *
     * @example utf8
     *
     * @var string
     */
    public $charset;

    /**
     * @var string[]
     */
    public $collations;
    protected $_name = [
        'charset'    => 'Charset',
        'collations' => 'Collations',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->charset) {
            $res['Charset'] = $this->charset;
        }
        if (null !== $this->collations) {
            $res['Collations'] = $this->collations;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return charset
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['Collations'])) {
            if (!empty($map['Collations'])) {
                $model->collations = $map['Collations'];
            }
        }

        return $model;
    }
}
