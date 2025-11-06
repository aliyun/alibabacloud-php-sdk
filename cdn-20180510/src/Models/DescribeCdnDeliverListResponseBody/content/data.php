<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListResponseBody\content;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListResponseBody\content\data\deliver;
use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnDeliverListResponseBody\content\data\reports;

class data extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $crontab;

    /**
     * @var deliver
     */
    public $deliver;

    /**
     * @var int
     */
    public $deliverId;

    /**
     * @var string[]
     */
    public $dmList;

    /**
     * @var string
     */
    public $frequency;

    /**
     * @var string
     */
    public $name;

    /**
     * @var reports[]
     */
    public $reports;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $timeEndFormat;

    /**
     * @var string
     */
    public $timeFromFormat;
    protected $_name = [
        'createTime' => 'createTime',
        'crontab' => 'crontab',
        'deliver' => 'deliver',
        'deliverId' => 'deliverId',
        'dmList' => 'dmList',
        'frequency' => 'frequency',
        'name' => 'name',
        'reports' => 'reports',
        'status' => 'status',
        'timeEndFormat' => 'timeEndFormat',
        'timeFromFormat' => 'timeFromFormat',
    ];

    public function validate()
    {
        if (null !== $this->deliver) {
            $this->deliver->validate();
        }
        if (\is_array($this->dmList)) {
            Model::validateArray($this->dmList);
        }
        if (\is_array($this->reports)) {
            Model::validateArray($this->reports);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->crontab) {
            $res['crontab'] = $this->crontab;
        }

        if (null !== $this->deliver) {
            $res['deliver'] = null !== $this->deliver ? $this->deliver->toArray($noStream) : $this->deliver;
        }

        if (null !== $this->deliverId) {
            $res['deliverId'] = $this->deliverId;
        }

        if (null !== $this->dmList) {
            if (\is_array($this->dmList)) {
                $res['dmList'] = [];
                $n1 = 0;
                foreach ($this->dmList as $item1) {
                    $res['dmList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->frequency) {
            $res['frequency'] = $this->frequency;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->reports) {
            if (\is_array($this->reports)) {
                $res['reports'] = [];
                $n1 = 0;
                foreach ($this->reports as $item1) {
                    $res['reports'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->timeEndFormat) {
            $res['timeEndFormat'] = $this->timeEndFormat;
        }

        if (null !== $this->timeFromFormat) {
            $res['timeFromFormat'] = $this->timeFromFormat;
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

        if (isset($map['crontab'])) {
            $model->crontab = $map['crontab'];
        }

        if (isset($map['deliver'])) {
            $model->deliver = deliver::fromMap($map['deliver']);
        }

        if (isset($map['deliverId'])) {
            $model->deliverId = $map['deliverId'];
        }

        if (isset($map['dmList'])) {
            if (!empty($map['dmList'])) {
                $model->dmList = [];
                $n1 = 0;
                foreach ($map['dmList'] as $item1) {
                    $model->dmList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['frequency'])) {
            $model->frequency = $map['frequency'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['reports'])) {
            if (!empty($map['reports'])) {
                $model->reports = [];
                $n1 = 0;
                foreach ($map['reports'] as $item1) {
                    $model->reports[$n1] = reports::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['timeEndFormat'])) {
            $model->timeEndFormat = $map['timeEndFormat'];
        }

        if (isset($map['timeFromFormat'])) {
            $model->timeFromFormat = $map['timeFromFormat'];
        }

        return $model;
    }
}
