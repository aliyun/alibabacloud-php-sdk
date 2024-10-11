<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\ColdStartRankResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example 3_Lwm4vy1
     *
     * @var string
     */
    public $itemId;

    /**
     * @example article
     *
     * @var string
     */
    public $itemType;

    /**
     * @example 1007.62364.131773.100200300000000:d709586e-643c-4fcb-a35c-6c5e8cd6756e:Grr8KG::0:sy_list_gul:::1:content___3_Lwm4vy:article:i2i_common_common:9.385107352002104E-4:0.25131988525390625:null:1677207034118::context__recall_index=253,context__hour=10,context__trigger_num=2::002bc90e-0d30-4682-9de3-1f4bad73702e:i2i_scategory_common,hot_common,i2i_common_common,i2i_swing_common:::::
     *
     * @var string
     */
    public $traceInfo;
    protected $_name = [
        'itemId'    => 'itemId',
        'itemType'  => 'itemType',
        'traceInfo' => 'traceInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->itemId) {
            $res['itemId'] = $this->itemId;
        }
        if (null !== $this->itemType) {
            $res['itemType'] = $this->itemType;
        }
        if (null !== $this->traceInfo) {
            $res['traceInfo'] = $this->traceInfo;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['itemId'])) {
            $model->itemId = $map['itemId'];
        }
        if (isset($map['itemType'])) {
            $model->itemType = $map['itemType'];
        }
        if (isset($map['traceInfo'])) {
            $model->traceInfo = $map['traceInfo'];
        }

        return $model;
    }
}
