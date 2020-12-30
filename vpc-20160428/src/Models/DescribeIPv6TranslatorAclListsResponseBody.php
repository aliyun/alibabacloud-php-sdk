<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeIPv6TranslatorAclListsResponseBody\ipv6TranslatorAcls;
use AlibabaCloud\Tea\Model;

class DescribeIPv6TranslatorAclListsResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var ipv6TranslatorAcls
     */
    public $ipv6TranslatorAcls;
    protected $_name = [
        'totalCount'         => 'TotalCount',
        'pageSize'           => 'PageSize',
        'requestId'          => 'RequestId',
        'pageNumber'         => 'PageNumber',
        'ipv6TranslatorAcls' => 'Ipv6TranslatorAcls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->ipv6TranslatorAcls) {
            $res['Ipv6TranslatorAcls'] = null !== $this->ipv6TranslatorAcls ? $this->ipv6TranslatorAcls->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIPv6TranslatorAclListsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['Ipv6TranslatorAcls'])) {
            $model->ipv6TranslatorAcls = ipv6TranslatorAcls::fromMap($map['Ipv6TranslatorAcls']);
        }

        return $model;
    }
}
