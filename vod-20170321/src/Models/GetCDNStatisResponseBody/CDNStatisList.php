<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetCDNStatisResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\GetCDNStatisResponseBody\CDNStatisList\CDNMetric;

class CDNStatisList extends Model
{
    /**
     * @var CDNMetric[]
     */
    public $CDNMetric;
    protected $_name = [
        'CDNMetric' => 'CDNMetric',
    ];

    public function validate()
    {
        if (\is_array($this->CDNMetric)) {
            Model::validateArray($this->CDNMetric);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->CDNMetric) {
            if (\is_array($this->CDNMetric)) {
                $res['CDNMetric'] = [];
                $n1 = 0;
                foreach ($this->CDNMetric as $item1) {
                    $res['CDNMetric'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['CDNMetric'])) {
            if (!empty($map['CDNMetric'])) {
                $model->CDNMetric = [];
                $n1 = 0;
                foreach ($map['CDNMetric'] as $item1) {
                    $model->CDNMetric[$n1] = CDNMetric::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
