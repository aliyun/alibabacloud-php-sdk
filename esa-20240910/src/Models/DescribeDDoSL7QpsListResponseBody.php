<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSL7QpsListResponseBody\dataModule;
use AlibabaCloud\Tea\Model;

class DescribeDDoSL7QpsListResponseBody extends Model
{
    /**
     * @example 300
     *
     * @var int
     */
    public $dataInterval;

    /**
     * @var dataModule[]
     */
    public $dataModule;

    /**
     * @example 2023-04-19T19:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 86510927836942****
     *
     * @var int
     */
    public $recordId;

    /**
     * @description Id of the request
     *
     * @example 156A6B-677B1A-4297B7-9187B7-2B44792
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 123456****
     *
     * @var int
     */
    public $siteId;

    /**
     * @example 2023-04-19T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'dataModule'   => 'DataModule',
        'endTime'      => 'EndTime',
        'recordId'     => 'RecordId',
        'requestId'    => 'RequestId',
        'siteId'       => 'SiteId',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->dataModule) {
            $res['DataModule'] = [];
            if (null !== $this->dataModule && \is_array($this->dataModule)) {
                $n = 0;
                foreach ($this->dataModule as $item) {
                    $res['DataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->recordId) {
            $res['RecordId'] = $this->recordId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->siteId) {
            $res['SiteId'] = $this->siteId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDDoSL7QpsListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DataModule'])) {
            if (!empty($map['DataModule'])) {
                $model->dataModule = [];
                $n                 = 0;
                foreach ($map['DataModule'] as $item) {
                    $model->dataModule[$n++] = null !== $item ? dataModule::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RecordId'])) {
            $model->recordId = $map['RecordId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SiteId'])) {
            $model->siteId = $map['SiteId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
