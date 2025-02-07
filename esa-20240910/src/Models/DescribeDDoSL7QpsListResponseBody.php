<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSL7QpsListResponseBody\dataModule;

class DescribeDDoSL7QpsListResponseBody extends Model
{
    /**
     * @var int
     */
    public $dataInterval;
    /**
     * @var dataModule[]
     */
    public $dataModule;
    /**
     * @var string
     */
    public $endTime;
    /**
     * @var int
     */
    public $recordId;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var int
     */
    public $siteId;
    /**
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
        if (\is_array($this->dataModule)) {
            Model::validateArray($this->dataModule);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }

        if (null !== $this->dataModule) {
            if (\is_array($this->dataModule)) {
                $res['DataModule'] = [];
                $n1                = 0;
                foreach ($this->dataModule as $item1) {
                    $res['DataModule'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }

        if (isset($map['DataModule'])) {
            if (!empty($map['DataModule'])) {
                $model->dataModule = [];
                $n1                = 0;
                foreach ($map['DataModule'] as $item1) {
                    $model->dataModule[$n1++] = dataModule::fromMap($item1);
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
