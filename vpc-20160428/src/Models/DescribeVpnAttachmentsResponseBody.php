<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsResponseBody\vpnAttachments;
use AlibabaCloud\Tea\Model;

class DescribeVpnAttachmentsResponseBody extends Model
{
    /**
     * @description The page number.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The request ID.
     *
     * @example 9F0725BB-186A-3564-91C3-AAE48042F853
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The number of returned entries.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The list of IPsec-VPN connections associated with the transit router.
     *
     * @var vpnAttachments[]
     */
    public $vpnAttachments;
    protected $_name = [
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpnAttachments' => 'VpnAttachments',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vpnAttachments) {
            $res['VpnAttachments'] = [];
            if (null !== $this->vpnAttachments && \is_array($this->vpnAttachments)) {
                $n = 0;
                foreach ($this->vpnAttachments as $item) {
                    $res['VpnAttachments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpnAttachmentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['VpnAttachments'])) {
            if (!empty($map['VpnAttachments'])) {
                $model->vpnAttachments = [];
                $n = 0;
                foreach ($map['VpnAttachments'] as $item) {
                    $model->vpnAttachments[$n++] = null !== $item ? vpnAttachments::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
