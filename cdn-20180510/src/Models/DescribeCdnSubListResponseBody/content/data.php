<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSubListResponseBody\content;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string[]
     */
    public $domains;

    /**
     * @var string
     */
    public $effectiveEnd;

    /**
     * @var string
     */
    public $effectiveFrom;

    /**
     * @var int[]
     */
    public $reportId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $subId;
    protected $_name = [
        'createTime' => 'createTime',
        'domains' => 'domains',
        'effectiveEnd' => 'effectiveEnd',
        'effectiveFrom' => 'effectiveFrom',
        'reportId' => 'reportId',
        'status' => 'status',
        'subId' => 'subId',
    ];

    public function validate()
    {
        if (\is_array($this->domains)) {
            Model::validateArray($this->domains);
        }
        if (\is_array($this->reportId)) {
            Model::validateArray($this->reportId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->domains) {
            if (\is_array($this->domains)) {
                $res['domains'] = [];
                $n1 = 0;
                foreach ($this->domains as $item1) {
                    $res['domains'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->effectiveEnd) {
            $res['effectiveEnd'] = $this->effectiveEnd;
        }

        if (null !== $this->effectiveFrom) {
            $res['effectiveFrom'] = $this->effectiveFrom;
        }

        if (null !== $this->reportId) {
            if (\is_array($this->reportId)) {
                $res['reportId'] = [];
                $n1 = 0;
                foreach ($this->reportId as $item1) {
                    $res['reportId'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->subId) {
            $res['subId'] = $this->subId;
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
        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['domains'])) {
            if (!empty($map['domains'])) {
                $model->domains = [];
                $n1 = 0;
                foreach ($map['domains'] as $item1) {
                    $model->domains[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['effectiveEnd'])) {
            $model->effectiveEnd = $map['effectiveEnd'];
        }

        if (isset($map['effectiveFrom'])) {
            $model->effectiveFrom = $map['effectiveFrom'];
        }

        if (isset($map['reportId'])) {
            if (!empty($map['reportId'])) {
                $model->reportId = [];
                $n1 = 0;
                foreach ($map['reportId'] as $item1) {
                    $model->reportId[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['subId'])) {
            $model->subId = $map['subId'];
        }

        return $model;
    }
}
