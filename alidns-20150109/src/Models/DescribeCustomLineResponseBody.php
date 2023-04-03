<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCustomLineResponseBody\ipSegmentList;
use AlibabaCloud\Tea\Model;

class DescribeCustomLineResponseBody extends Model
{
    /**
     * @description The code of the custom line. The code is used when you configure a resolution record.
     *
     * @example hra0yc-597
     *
     * @var string
     */
    public $code;

    /**
     * @description The domain name for which the custom line is configured.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The unique ID of the custom line.
     *
     * @example 597
     *
     * @var int
     */
    public $id;

    /**
     * @description The list of CIDR blocks.
     *
     * @var ipSegmentList[]
     */
    public $ipSegmentList;

    /**
     * @description The name of the custom line.
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the request.
     *
     * @example B57C121B-A45F-44D8-A9B2-13E5A5044195
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'code'          => 'Code',
        'domainName'    => 'DomainName',
        'id'            => 'Id',
        'ipSegmentList' => 'IpSegmentList',
        'name'          => 'Name',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->ipSegmentList) {
            $res['IpSegmentList'] = [];
            if (null !== $this->ipSegmentList && \is_array($this->ipSegmentList)) {
                $n = 0;
                foreach ($this->ipSegmentList as $item) {
                    $res['IpSegmentList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCustomLineResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['IpSegmentList'])) {
            if (!empty($map['IpSegmentList'])) {
                $model->ipSegmentList = [];
                $n                    = 0;
                foreach ($map['IpSegmentList'] as $item) {
                    $model->ipSegmentList[$n++] = null !== $item ? ipSegmentList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
