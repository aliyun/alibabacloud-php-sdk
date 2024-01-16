<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sophonsoar\V20220728\Models\DescribeApiListResponseBody;

use AlibabaCloud\Tea\Model;

class apiList extends Model
{
    /**
     * @description The link to the API references of the Alibaba Cloud service.
     *
     * @example https://xxxxx
     *
     * @var string
     */
    public $docUrl;

    /**
     * @description The POP code of the Alibaba Cloud service.
     *
     * @example Sas
     *
     * @var string
     */
    public $popCode;

    /**
     * @description The name of the Alibaba Cloud service.
     *
     * @example Cloud Security Center
     *
     * @var string
     */
    public $productName;
    protected $_name = [
        'docUrl'      => 'DocUrl',
        'popCode'     => 'PopCode',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->docUrl) {
            $res['DocUrl'] = $this->docUrl;
        }
        if (null !== $this->popCode) {
            $res['PopCode'] = $this->popCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DocUrl'])) {
            $model->docUrl = $map['DocUrl'];
        }
        if (isset($map['PopCode'])) {
            $model->popCode = $map['PopCode'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
