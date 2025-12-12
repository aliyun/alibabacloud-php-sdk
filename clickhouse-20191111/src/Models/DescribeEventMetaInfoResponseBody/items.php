<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeEventMetaInfoResponseBody;

use AlibabaCloud\Dara\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $sourceCode;
    protected $_name = [
        'code' => 'Code',
        'sourceCode' => 'SourceCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->sourceCode) {
            $res['SourceCode'] = $this->sourceCode;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['SourceCode'])) {
            $model->sourceCode = $map['SourceCode'];
        }

        return $model;
    }
}
