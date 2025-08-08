<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataImportSQLPreCheckDetailResponseBody;

use AlibabaCloud\Dara\Model;

class preCheckSQLDetailList extends Model
{
    /**
     * @var bool
     */
    public $skip;

    /**
     * @var int
     */
    public $sqlId;

    /**
     * @var string
     */
    public $sqlType;

    /**
     * @var string
     */
    public $statusCode;
    protected $_name = [
        'skip' => 'Skip',
        'sqlId' => 'SqlId',
        'sqlType' => 'SqlType',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skip) {
            $res['Skip'] = $this->skip;
        }

        if (null !== $this->sqlId) {
            $res['SqlId'] = $this->sqlId;
        }

        if (null !== $this->sqlType) {
            $res['SqlType'] = $this->sqlType;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = $this->statusCode;
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
        if (isset($map['Skip'])) {
            $model->skip = $map['Skip'];
        }

        if (isset($map['SqlId'])) {
            $model->sqlId = $map['SqlId'];
        }

        if (isset($map['SqlType'])) {
            $model->sqlType = $map['SqlType'];
        }

        if (isset($map['StatusCode'])) {
            $model->statusCode = $map['StatusCode'];
        }

        return $model;
    }
}
