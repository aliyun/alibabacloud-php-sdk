<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class DescribeLiveStreamsOnlineListRequest extends Model
{
    /**
     * @description The name of the application to which the live stream belongs. You can view the application name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * @example liveApp****
     *
     * @var string
     */
    public $appName;

    /**
     * @description The main streaming domain.
     *
     * This parameter is required.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Specifies whether to return only specific parameters. Valid values:
     *
     *   **yes**: returns only the DomainName, AppName, StreamName, and PublishTime parameters.
     *   **no**: returns all parameters. This is the default value.
     *
     * @example no
     *
     * @var string
     */
    public $onlyStream;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The page number. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNum;

    /**
     * @description The number of entries per page. Valid values: 1 to 3000. Default value: 2000.
     *
     * @example 1500
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The mode in which stream names are matched. Valid values:
     *
     *   **fuzzy** (default): fuzzy match
     *   **strict**: exact match
     *
     * @example fuzzy
     *
     * @var string
     */
    public $queryType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the live stream. You can specify only one live stream. You can view the stream name on the [Stream Management](https://help.aliyun.com/document_detail/197397.html) page of the ApsaraVideo Live console.
     *
     * @example liveStream****
     *
     * @var string
     */
    public $streamName;

    /**
     * @description The type of the streams to query. Valid values:
     *
     *   **all** (default): all streams
     *   **raw**: source streams
     *   **trans**: transcoded streams
     *
     * @example all
     *
     * @var string
     */
    public $streamType;
    protected $_name = [
        'appName' => 'AppName',
        'domainName' => 'DomainName',
        'onlyStream' => 'OnlyStream',
        'ownerId' => 'OwnerId',
        'pageNum' => 'PageNum',
        'pageSize' => 'PageSize',
        'queryType' => 'QueryType',
        'regionId' => 'RegionId',
        'streamName' => 'StreamName',
        'streamType' => 'StreamType',
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
        if (null !== $this->onlyStream) {
            $res['OnlyStream'] = $this->onlyStream;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->streamName) {
            $res['StreamName'] = $this->streamName;
        }
        if (null !== $this->streamType) {
            $res['StreamType'] = $this->streamType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveStreamsOnlineListRequest
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
        if (isset($map['OnlyStream'])) {
            $model->onlyStream = $map['OnlyStream'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StreamName'])) {
            $model->streamName = $map['StreamName'];
        }
        if (isset($map['StreamType'])) {
            $model->streamType = $map['StreamType'];
        }

        return $model;
    }
}
