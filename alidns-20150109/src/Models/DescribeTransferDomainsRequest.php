<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Tea\Model;

class DescribeTransferDomainsRequest extends Model
{
    /**
     * @var string
     */
    public $lang;

    /**
     * @var string
     */
    public $userClientIp;

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
    public $transferType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $fromUserId;

    /**
     * @var int
     */
    public $targetUserId;
    protected $_name = [
        'lang'         => 'Lang',
        'userClientIp' => 'UserClientIp',
        'pageNumber'   => 'PageNumber',
        'pageSize'     => 'PageSize',
        'transferType' => 'TransferType',
        'domainName'   => 'DomainName',
        'fromUserId'   => 'FromUserId',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lang) {
            $res['Lang'] = $this->lang;
        }
        if (null !== $this->userClientIp) {
            $res['UserClientIp'] = $this->userClientIp;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->transferType) {
            $res['TransferType'] = $this->transferType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->fromUserId) {
            $res['FromUserId'] = $this->fromUserId;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTransferDomainsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Lang'])) {
            $model->lang = $map['Lang'];
        }
        if (isset($map['UserClientIp'])) {
            $model->userClientIp = $map['UserClientIp'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['TransferType'])) {
            $model->transferType = $map['TransferType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FromUserId'])) {
            $model->fromUserId = $map['FromUserId'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
