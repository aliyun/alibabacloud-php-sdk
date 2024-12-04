<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetNodeInputSchemaResponseBody extends Model
{
    /**
     * @var string[]
     */
    public $colNames;

    /**
     * @var string[]
     */
    public $colTypes;

    /**
     * @example CEB07647-8A5D-56F1-8B99-361BCF51402F
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'colNames'  => 'ColNames',
        'colTypes'  => 'ColTypes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->colNames) {
            $res['ColNames'] = $this->colNames;
        }
        if (null !== $this->colTypes) {
            $res['ColTypes'] = $this->colTypes;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetNodeInputSchemaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ColNames'])) {
            if (!empty($map['ColNames'])) {
                $model->colNames = $map['ColNames'];
            }
        }
        if (isset($map['ColTypes'])) {
            if (!empty($map['ColTypes'])) {
                $model->colTypes = $map['ColTypes'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
