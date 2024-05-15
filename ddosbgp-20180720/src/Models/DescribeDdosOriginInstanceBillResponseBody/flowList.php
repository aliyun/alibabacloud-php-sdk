<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddosbgp\V20180720\Models\DescribeDdosOriginInstanceBillResponseBody;

use AlibabaCloud\Tea\Model;

class flowList extends Model
{
    /**
     * @example [{\\"bytes\\":79282719,\\"memberUid\\":\\"\\",\\"regionFlows\\":{\\"cn-hangzhou\\":[{\\"bytes\\":79282719,\\"instanceId\\":\\"ddosorigin_cn-u7c3lcr9r02\\",\\"ip\\":\\"47.118.168.57\\",\\"region\\":\\"cn-hangzhou\\"}]}}]
     *
     * @var string
     */
    public $memberFlow;

    /**
     * @example {\\"cn-hangzhou\\":[{\\"bytes\\":0,\\"instanceId\\":\\"ddosorigin_cn-u7c3lcr9r02\\",\\"ip\\":\\"47.118.168.124\\",\\"region\\":\\"cn-hangzhou\\"}]}
     *
     * @var string
     */
    public $regionFlow;

    /**
     * @example 1620951900
     *
     * @var int
     */
    public $time;

    /**
     * @example 6302081067
     *
     * @var int
     */
    public $totalFlow;
    protected $_name = [
        'memberFlow' => 'MemberFlow',
        'regionFlow' => 'RegionFlow',
        'time'       => 'Time',
        'totalFlow'  => 'TotalFlow',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->memberFlow) {
            $res['MemberFlow'] = $this->memberFlow;
        }
        if (null !== $this->regionFlow) {
            $res['RegionFlow'] = $this->regionFlow;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->totalFlow) {
            $res['TotalFlow'] = $this->totalFlow;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flowList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MemberFlow'])) {
            $model->memberFlow = $map['MemberFlow'];
        }
        if (isset($map['RegionFlow'])) {
            $model->regionFlow = $map['RegionFlow'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['TotalFlow'])) {
            $model->totalFlow = $map['TotalFlow'];
        }

        return $model;
    }
}
