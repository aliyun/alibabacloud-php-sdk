<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\CreateAppSessionBatchSyncResponseBody\resultList\bizInfo;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @example 127.0.X.X
     *
     * @var string
     */
    public $accessHost;

    /**
     * @example 8080
     *
     * @var string
     */
    public $accessPort;

    /**
     * @example huadong
     *
     * @var string
     */
    public $districtId;

    /**
     * @example bgp
     *
     * @var string
     */
    public $isp;

    /**
     * @example exampleName
     *
     * @var string
     */
    public $name;

    /**
     * @example Native
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'accessHost' => 'AccessHost',
        'accessPort' => 'AccessPort',
        'districtId' => 'DistrictId',
        'isp'        => 'Isp',
        'name'       => 'Name',
        'type'       => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessHost) {
            $res['AccessHost'] = $this->accessHost;
        }
        if (null !== $this->accessPort) {
            $res['AccessPort'] = $this->accessPort;
        }
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->isp) {
            $res['Isp'] = $this->isp;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessHost'])) {
            $model->accessHost = $map['AccessHost'];
        }
        if (isset($map['AccessPort'])) {
            $model->accessPort = $map['AccessPort'];
        }
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['Isp'])) {
            $model->isp = $map['Isp'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
