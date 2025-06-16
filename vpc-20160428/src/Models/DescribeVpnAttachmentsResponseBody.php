<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsResponseBody\vpnAttachments;

class DescribeVpnAttachmentsResponseBody extends Model
{
    /**
     * @var int
     */
    public $pageNumber;

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
    public $totalCount;

    /**
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

    public function validate()
    {
        if (\is_array($this->vpnAttachments)) {
            Model::validateArray($this->vpnAttachments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->vpnAttachments)) {
                $res['VpnAttachments'] = [];
                $n1 = 0;
                foreach ($this->vpnAttachments as $item1) {
                    $res['VpnAttachments'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $n1 = 0;
                foreach ($map['VpnAttachments'] as $item1) {
                    $model->vpnAttachments[$n1] = vpnAttachments::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
