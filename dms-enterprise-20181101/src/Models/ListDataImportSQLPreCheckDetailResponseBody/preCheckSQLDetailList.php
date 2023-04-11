<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListDataImportSQLPreCheckDetailResponseBody;

use AlibabaCloud\Tea\Model;

class preCheckSQLDetailList extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $skip;

    /**
     * @example 1
     *
     * @var int
     */
    public $sqlId;

    /**
     * @example INSERT
     *
     * @var string
     */
    public $sqlType;

    /**
     * @example SUCCESS
     *
     * @var string
     */
    public $statusCode;
    protected $_name = [
        'skip'       => 'Skip',
        'sqlId'      => 'SqlId',
        'sqlType'    => 'SqlType',
        'statusCode' => 'StatusCode',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return preCheckSQLDetailList
     */
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
