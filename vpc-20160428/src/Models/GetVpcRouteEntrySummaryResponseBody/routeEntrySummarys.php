<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcRouteEntrySummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vpc\V20160428\Models\GetVpcRouteEntrySummaryResponseBody\routeEntrySummarys\entrySummarys;

class routeEntrySummarys extends Model
{
    /**
     * @var entrySummarys[]
     */
    public $entrySummarys;

    /**
     * @var string
     */
    public $routeTableId;
    protected $_name = [
        'entrySummarys' => 'EntrySummarys',
        'routeTableId' => 'RouteTableId',
    ];

    public function validate()
    {
        if (\is_array($this->entrySummarys)) {
            Model::validateArray($this->entrySummarys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entrySummarys) {
            if (\is_array($this->entrySummarys)) {
                $res['EntrySummarys'] = [];
                $n1 = 0;
                foreach ($this->entrySummarys as $item1) {
                    $res['EntrySummarys'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->routeTableId) {
            $res['RouteTableId'] = $this->routeTableId;
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
        if (isset($map['EntrySummarys'])) {
            if (!empty($map['EntrySummarys'])) {
                $model->entrySummarys = [];
                $n1 = 0;
                foreach ($map['EntrySummarys'] as $item1) {
                    $model->entrySummarys[$n1] = entrySummarys::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RouteTableId'])) {
            $model->routeTableId = $map['RouteTableId'];
        }

        return $model;
    }
}
