<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogTypeResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $logType;

    /**
     * @var string
     */
    public $logTypeName;
    protected $_name = [
        'logType' => 'LogType',
        'logTypeName' => 'LogTypeName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logType) {
            $res['LogType'] = $this->logType;
        }

        if (null !== $this->logTypeName) {
            $res['LogTypeName'] = $this->logTypeName;
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
        if (isset($map['LogType'])) {
            $model->logType = $map['LogType'];
        }

        if (isset($map['LogTypeName'])) {
            $model->logTypeName = $map['LogTypeName'];
        }

        return $model;
    }
}
