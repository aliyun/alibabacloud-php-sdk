<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sgw\V20180511\Models;

use AlibabaCloud\SDK\Sgw\V20180511\Models\DescribeGatewayNFSClientsResponseBody\clientInfoList;
use AlibabaCloud\Tea\Model;

class DescribeGatewayNFSClientsResponseBody extends Model
{
    /**
     * @var clientInfoList
     */
    public $clientInfoList;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

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
     * @var bool
     */
    public $success;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var bool
     */
    public $version3Enabled;

    /**
     * @var bool
     */
    public $version40Enabled;

    /**
     * @var bool
     */
    public $version41Enabled;
    protected $_name = [
        'clientInfoList'   => 'ClientInfoList',
        'code'             => 'Code',
        'message'          => 'Message',
        'pageNumber'       => 'PageNumber',
        'pageSize'         => 'PageSize',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
        'totalCount'       => 'TotalCount',
        'version3Enabled'  => 'Version3Enabled',
        'version40Enabled' => 'Version40Enabled',
        'version41Enabled' => 'Version41Enabled',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientInfoList) {
            $res['ClientInfoList'] = null !== $this->clientInfoList ? $this->clientInfoList->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->version3Enabled) {
            $res['Version3Enabled'] = $this->version3Enabled;
        }
        if (null !== $this->version40Enabled) {
            $res['Version40Enabled'] = $this->version40Enabled;
        }
        if (null !== $this->version41Enabled) {
            $res['Version41Enabled'] = $this->version41Enabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGatewayNFSClientsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientInfoList'])) {
            $model->clientInfoList = clientInfoList::fromMap($map['ClientInfoList']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['Version3Enabled'])) {
            $model->version3Enabled = $map['Version3Enabled'];
        }
        if (isset($map['Version40Enabled'])) {
            $model->version40Enabled = $map['Version40Enabled'];
        }
        if (isset($map['Version41Enabled'])) {
            $model->version41Enabled = $map['Version41Enabled'];
        }

        return $model;
    }
}
