<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $marker;

    /**
     * @var string
     */
    public $hostId;

    /**
     * @var mixed[][]
     */
    public $omsData;
    protected $_name = [
        'marker'  => 'Marker',
        'hostId'  => 'HostId',
        'omsData' => 'OmsData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
        }
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->omsData) {
            $res['OmsData'] = $this->omsData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['OmsData'])) {
            if (!empty($map['OmsData'])) {
                $model->omsData = $map['OmsData'];
            }
        }

        return $model;
    }
}
