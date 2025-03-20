<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class ListCiphersResponseBody extends Model
{
    /**
     * @description Name of the cipher suite group.
     *
     * @example all
     *
     * @var string
     */
    public $ciphersGroup;

    /**
     * @description Request ID.
     *
     * @example 0AEDAF20-4DDF-4165-8750-47FF9C1929C9
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Returned result.
     *
     * @var string[]
     */
    public $result;

    /**
     * @description Total number of cipher suites.
     *
     * @example 16
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'ciphersGroup' => 'CiphersGroup',
        'requestId' => 'RequestId',
        'result' => 'Result',
        'totalCount' => 'TotalCount',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ciphersGroup) {
            $res['CiphersGroup'] = $this->ciphersGroup;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->result) {
            $res['Result'] = $this->result;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListCiphersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CiphersGroup'])) {
            $model->ciphersGroup = $map['CiphersGroup'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Result'])) {
            if (!empty($map['Result'])) {
                $model->result = $map['Result'];
            }
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
