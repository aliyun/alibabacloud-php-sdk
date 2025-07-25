<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeTransferDomainsResponseBody\domainTransfers;

use AlibabaCloud\Tea\Model;

class domainTransfer extends Model
{
    /**
     * @description The time when the domain name was created. The time follows the ISO 8601 standard in the YYYY-MM-DDThh:mm:ss format. The time is displayed in UTC.
     *
     * @example 2019-10-30T07:16Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the domain name was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1572419764000
     *
     * @var int
     */
    public $createTimestamp;

    /**
     * @description The domain name.
     *
     * @example test.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The user ID from which the domain name was transferred.
     *
     * @example 2222
     *
     * @var int
     */
    public $fromUserId;

    /**
     * @description The ID of the domain name that was transferred.
     *
     * @example 1
     *
     * @var int
     */
    public $id;

    /**
     * @description The user ID to which the domain name was transferred.
     *
     * @example 111111
     *
     * @var int
     */
    public $targetUserId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'createTimestamp' => 'CreateTimestamp',
        'domainName' => 'DomainName',
        'fromUserId' => 'FromUserId',
        'id' => 'Id',
        'targetUserId' => 'TargetUserId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->createTimestamp) {
            $res['CreateTimestamp'] = $this->createTimestamp;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->fromUserId) {
            $res['FromUserId'] = $this->fromUserId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->targetUserId) {
            $res['TargetUserId'] = $this->targetUserId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return domainTransfer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CreateTimestamp'])) {
            $model->createTimestamp = $map['CreateTimestamp'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['FromUserId'])) {
            $model->fromUserId = $map['FromUserId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['TargetUserId'])) {
            $model->targetUserId = $map['TargetUserId'];
        }

        return $model;
    }
}
