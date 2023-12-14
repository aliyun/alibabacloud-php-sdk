<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeLogTypeResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The log type of the rule.
     *
     * @example HTTP_ACTIVITY
     *
     * @var string
     */
    public $logType;

    /**
     * @description The internal code of the log type.
     *
     * @example sas.cloudsiem.prod.http_activity
     *
     * @var string
     */
    public $logTypeName;
    protected $_name = [
        'logType'     => 'LogType',
        'logTypeName' => 'LogTypeName',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
