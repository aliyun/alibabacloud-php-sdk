<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamRecordIndexFileRequest extends Model
{
    /**
     * @description System-defined parameter. Value: **DescribeLiveStreamRecordIndexFile**.
     *
     * This parameter is required.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description ## [](#)Usage notes
     *
     * ApsaraVideo Live stores the configuration information of an M3U8 index file for six months. You can query only index files created in the previous six months. M3U8 index files are stored in Object Storage Service (OSS) buckets. The retention period is determined by the storage configuration of the OSS buckets.
     *
     * ## [](#qps-)QPS limit
     *
     * You can call this operation up to 100 times per second per account. Requests that exceed this limit are dropped and you may experience service interruptions. We recommend that you take note of this limit when you call this operation. For more information, see [QPS limits](https://help.aliyun.com/document_detail/343507.html).
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the index file.
     *
     * >  You can call the [DescribeLiveStreamRecordIndexFiles](https://help.aliyun.com/document_detail/2847890.html) operation to query the ID.
     *
     * This parameter is required.
     *
     * @example c4d7f0a4-b506-43f9-8de3-07732c3f****
     *
     * @var string
     */
    public $recordId;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @description The main domain of the live stream.
     *
     * This parameter is required.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'ownerId' => 'OwnerId',
        'recordId' => 'RecordId',
        'securityToken' => 'SecurityToken',
        'streamName' => 'StreamName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamRecordIndexFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }

        return $model;
    }
}
