<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dysms\V20170620\Models\QueryShortUrlDetailNewResponseBody\record;

class QueryShortUrlDetailNewResponseBody extends Model
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
     * @var record[]
     */
    public $record;

    /**
     * @var string
     */
    public $requestId;

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
        'record' => 'Record',
        'requestId' => 'RequestId',
        'shortUrl' => 'ShortUrl',
        'sourceUrl' => 'SourceUrl',
        'status' => 'Status',
        'totalPv' => 'TotalPv',
        'totalUv' => 'TotalUv',
    ];

    public function validate()
    {
        if (\is_array($this->record)) {
            Model::validateArray($this->record);
        }
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

        if (null !== $this->record) {
            if (\is_array($this->record)) {
                $res['Record'] = [];
                $n1 = 0;
                foreach ($this->record as $item1) {
                    $res['Record'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['Record'])) {
            if (!empty($map['Record'])) {
                $model->record = [];
                $n1 = 0;
                foreach ($map['Record'] as $item1) {
                    $model->record[$n1] = record::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
