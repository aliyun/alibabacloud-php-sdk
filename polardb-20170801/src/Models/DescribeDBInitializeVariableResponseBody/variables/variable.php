<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody\variables;

use AlibabaCloud\Tea\Model;

class variable extends Model
{
    /**
     * @var string
     */
    public $charset;

    /**
     * @var string
     */
    public $collate;

    /**
     * @var string
     */
    public $ctype;
    protected $_name = [
        'charset' => 'Charset',
        'collate' => 'Collate',
        'ctype'   => 'Ctype',
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
        if (null !== $this->collate) {
            $res['Collate'] = $this->collate;
        }
        if (null !== $this->ctype) {
            $res['Ctype'] = $this->ctype;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return variable
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Charset'])) {
            $model->charset = $map['Charset'];
        }
        if (isset($map['Collate'])) {
            $model->collate = $map['Collate'];
        }
        if (isset($map['Ctype'])) {
            $model->ctype = $map['Ctype'];
        }

        return $model;
    }
}
