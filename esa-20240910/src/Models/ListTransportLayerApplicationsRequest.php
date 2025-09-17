<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class ListTransportLayerApplicationsRequest extends Model
{
    /**
     * @var string
     */
    public $matchType;

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
    public $recordName;

    /**
     * @var int
     */
    public $siteId;
    protected $_name = [
        'matchType' => 'MatchType',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'recordName' => 'RecordName',
        'siteId' => 'SiteId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->matchType) {
            $res['MatchType'] = $this->matchType;
        }

        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->recordName) {
            $res['RecordName'] = $this->recordName;
        }

        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
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
        if (isset($map['MatchType'])) {
            $model->matchType = $map['MatchType'];
        }

        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['RecordName'])) {
            $model->recordName = $map['RecordName'];
        }

        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }

        return $model;
    }
}
