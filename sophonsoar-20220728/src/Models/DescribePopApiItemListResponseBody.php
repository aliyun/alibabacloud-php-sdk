<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models;

use AlibabaCloud\Tea\Model;

class DescribePopApiItemListResponseBody extends Model
{
    /**
     * @description The names of API operations.
     *
     * @var string[]
     */
    public $names;

    /**
     * @description The POP code of the Alibaba Cloud service.
     *
     * @example Sas
     *
     * @var string
     */
    public $popCode;

    /**
     * @description The request ID.
     *
     * @example 6336D603-7028-52DE-AD88-E34AA5248355
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 100
     *
     * @var int
     */
    public $total;

    /**
     * @description The version number of the API for the Alibaba Cloud service.
     *
     * @example 2018-12-03
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'names'     => 'Names',
        'popCode'   => 'PopCode',
        'requestId' => 'RequestId',
        'total'     => 'Total',
        'version'   => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->popCode) {
            $res['PopCode'] = $this->popCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePopApiItemListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Names'])) {
            if (!empty($map['Names'])) {
                $model->names = $map['Names'];
            }
        }
        if (isset($map['PopCode'])) {
            $model->popCode = $map['PopCode'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
