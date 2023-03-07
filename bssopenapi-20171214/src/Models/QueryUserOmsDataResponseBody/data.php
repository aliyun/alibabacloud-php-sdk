<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryUserOmsDataResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the host.
     *
     * @example cn
     *
     * @var string
     */
    public $hostId;

    /**
     * @description Indicates that the returned usage data starts from the next page. If no value is returned for this parameter or this parameter is not returned, no data can be queried.
     *
     * @example NextToken
     *
     * @var string
     */
    public $marker;

    /**
     * @var mixed[][]
     */
    public $omsData;
    protected $_name = [
        'hostId'  => 'HostId',
        'marker'  => 'Marker',
        'omsData' => 'OmsData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hostId) {
            $res['HostId'] = $this->hostId;
        }
        if (null !== $this->marker) {
            $res['Marker'] = $this->marker;
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
        if (isset($map['HostId'])) {
            $model->hostId = $map['HostId'];
        }
        if (isset($map['Marker'])) {
            $model->marker = $map['Marker'];
        }
        if (isset($map['OmsData'])) {
            if (!empty($map['OmsData'])) {
                $model->omsData = $map['OmsData'];
            }
        }

        return $model;
    }
}
