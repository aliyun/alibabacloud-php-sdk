<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CC5G\V20220314\Models;

use AlibabaCloud\Tea\Model;

class ListDiagnoseInfoForSingleCardRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $regionNo;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $wirelessCloudConnectorId;
    protected $_name = [
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'regionNo'                 => 'RegionNo',
        'source'                   => 'Source',
        'sourceType'               => 'SourceType',
        'status'                   => 'Status',
        'wirelessCloudConnectorId' => 'WirelessCloudConnectorId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionNo) {
            $res['RegionNo'] = $this->regionNo;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->wirelessCloudConnectorId) {
            $res['WirelessCloudConnectorId'] = $this->wirelessCloudConnectorId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDiagnoseInfoForSingleCardRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionNo'])) {
            $model->regionNo = $map['RegionNo'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WirelessCloudConnectorId'])) {
            $model->wirelessCloudConnectorId = $map['WirelessCloudConnectorId'];
        }

        return $model;
    }
}
