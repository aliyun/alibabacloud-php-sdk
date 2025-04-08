<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data\inbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data\outbound;
use AlibabaCloud\SDK\CCC\V20200701\Models\GetInstanceTrendingReportResponseBody\data\overall;

class data extends Model
{
    /**
     * @var inbound[]
     */
    public $inbound;

    /**
     * @var outbound[]
     */
    public $outbound;

    /**
     * @var overall[]
     */
    public $overall;
    protected $_name = [
        'inbound' => 'Inbound',
        'outbound' => 'Outbound',
        'overall' => 'Overall',
    ];

    public function validate()
    {
        if (\is_array($this->inbound)) {
            Model::validateArray($this->inbound);
        }
        if (\is_array($this->outbound)) {
            Model::validateArray($this->outbound);
        }
        if (\is_array($this->overall)) {
            Model::validateArray($this->overall);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->inbound) {
            if (\is_array($this->inbound)) {
                $res['Inbound'] = [];
                $n1 = 0;
                foreach ($this->inbound as $item1) {
                    $res['Inbound'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->outbound) {
            if (\is_array($this->outbound)) {
                $res['Outbound'] = [];
                $n1 = 0;
                foreach ($this->outbound as $item1) {
                    $res['Outbound'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->overall) {
            if (\is_array($this->overall)) {
                $res['Overall'] = [];
                $n1 = 0;
                foreach ($this->overall as $item1) {
                    $res['Overall'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Inbound'])) {
            if (!empty($map['Inbound'])) {
                $model->inbound = [];
                $n1 = 0;
                foreach ($map['Inbound'] as $item1) {
                    $model->inbound[$n1++] = inbound::fromMap($item1);
                }
            }
        }

        if (isset($map['Outbound'])) {
            if (!empty($map['Outbound'])) {
                $model->outbound = [];
                $n1 = 0;
                foreach ($map['Outbound'] as $item1) {
                    $model->outbound[$n1++] = outbound::fromMap($item1);
                }
            }
        }

        if (isset($map['Overall'])) {
            if (!empty($map['Overall'])) {
                $model->overall = [];
                $n1 = 0;
                foreach ($map['Overall'] as $item1) {
                    $model->overall[$n1++] = overall::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
