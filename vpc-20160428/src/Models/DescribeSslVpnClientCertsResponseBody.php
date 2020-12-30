<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeSslVpnClientCertsResponseBody\sslVpnClientCertKeys;
use AlibabaCloud\Tea\Model;

class DescribeSslVpnClientCertsResponseBody extends Model
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
     * @var sslVpnClientCertKeys
     */
    public $sslVpnClientCertKeys;
    protected $_name = [
        'totalCount'           => 'TotalCount',
        'pageSize'             => 'PageSize',
        'requestId'            => 'RequestId',
        'pageNumber'           => 'PageNumber',
        'sslVpnClientCertKeys' => 'SslVpnClientCertKeys',
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
        if (null !== $this->sslVpnClientCertKeys) {
            $res['SslVpnClientCertKeys'] = null !== $this->sslVpnClientCertKeys ? $this->sslVpnClientCertKeys->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSslVpnClientCertsResponseBody
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
        if (isset($map['SslVpnClientCertKeys'])) {
            $model->sslVpnClientCertKeys = sslVpnClientCertKeys::fromMap($map['SslVpnClientCertKeys']);
        }

        return $model;
    }
}
