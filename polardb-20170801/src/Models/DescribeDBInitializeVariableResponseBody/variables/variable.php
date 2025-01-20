<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeDBInitializeVariableResponseBody\variables;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
