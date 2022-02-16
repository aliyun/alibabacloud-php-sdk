<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cas\V20200619\Models;

use AlibabaCloud\Tea\Model;

class DescribeSSLCertificateCountRequest extends Model
{
    /**
     * @var string
     */
    public $searchValue;
    protected $_name = [
        'searchValue' => 'SearchValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->searchValue) {
            $res['SearchValue'] = $this->searchValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSSLCertificateCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SearchValue'])) {
            $model->searchValue = $map['SearchValue'];
        }

        return $model;
    }
}
