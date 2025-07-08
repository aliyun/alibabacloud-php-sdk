<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryShortUrlListNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class record extends Model
{
    /**
     * @var string
     */
    public $eventName;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtInvalidTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $shortUrl;

    /**
     * @var string
     */
    public $sourceUrl;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $totalPv;

    /**
     * @var string
     */
    public $totalUv;
    protected $_name = [
        'eventName' => 'EventName',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtInvalidTime' => 'GmtInvalidTime',
        'id' => 'Id',
        'reason' => 'Reason',
        'shortUrl' => 'ShortUrl',
        'sourceUrl' => 'SourceUrl',
        'status' => 'Status',
        'totalPv' => 'TotalPv',
        'totalUv' => 'TotalUv',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->eventName) {
            $res['EventName'] = $this->eventName;
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtInvalidTime) {
            $res['GmtInvalidTime'] = $this->gmtInvalidTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        if (null !== $this->shortUrl) {
            $res['ShortUrl'] = $this->shortUrl;
        }

        if (null !== $this->sourceUrl) {
            $res['SourceUrl'] = $this->sourceUrl;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->totalPv) {
            $res['TotalPv'] = $this->totalPv;
        }

        if (null !== $this->totalUv) {
            $res['TotalUv'] = $this->totalUv;
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
        if (isset($map['EventName'])) {
            $model->eventName = $map['EventName'];
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtInvalidTime'])) {
            $model->gmtInvalidTime = $map['GmtInvalidTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        if (isset($map['ShortUrl'])) {
            $model->shortUrl = $map['ShortUrl'];
        }

        if (isset($map['SourceUrl'])) {
            $model->sourceUrl = $map['SourceUrl'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TotalPv'])) {
            $model->totalPv = $map['TotalPv'];
        }

        if (isset($map['TotalUv'])) {
            $model->totalUv = $map['TotalUv'];
        }

        return $model;
    }
}
