<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class DescribeCdsFileShareLinksRequest extends Model
{
    /**
     * @example cn-hangzhou+cds-532033****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @var string[]
     */
    public $creators;

    /**
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example AAAAAV3MpHK1AP0pfERHZN5pu6nmB7qrRFJ8vmttjxPL****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example 7JQX1Fs****
     *
     * @var string
     */
    public $shareId;

    /**
     * @example user
     *
     * @var string
     */
    public $shareName;

    /**
     * @example disabled
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'cdsId'      => 'CdsId',
        'creators'   => 'Creators',
        'maxResults' => 'MaxResults',
        'nextToken'  => 'NextToken',
        'shareId'    => 'ShareId',
        'shareName'  => 'ShareName',
        'status'     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->creators) {
            $res['Creators'] = $this->creators;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->shareId) {
            $res['ShareId'] = $this->shareId;
        }
        if (null !== $this->shareName) {
            $res['ShareName'] = $this->shareName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdsFileShareLinksRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['Creators'])) {
            if (!empty($map['Creators'])) {
                $model->creators = $map['Creators'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ShareId'])) {
            $model->shareId = $map['ShareId'];
        }
        if (isset($map['ShareName'])) {
            $model->shareName = $map['ShareName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
