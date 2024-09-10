<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeDefaultKeyInfoResponseBody extends Model
{
    /**
     * @description The domain names.
     *
     * @var string[]
     */
    public $domainList;

    /**
     * @description The company name.
     *
     * @example Test
     *
     * @var string
     */
    public $names;

    /**
     * @description The request ID.
     *
     * @example BE120DAB-F4E7-4C53-ADC3-A97578A****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'domainList' => 'DomainList',
        'names'      => 'Names',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->domainList) {
            $res['DomainList'] = $this->domainList;
        }
        if (null !== $this->names) {
            $res['Names'] = $this->names;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDefaultKeyInfoResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DomainList'])) {
            if (!empty($map['DomainList'])) {
                $model->domainList = $map['DomainList'];
            }
        }
        if (isset($map['Names'])) {
            $model->names = $map['Names'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
