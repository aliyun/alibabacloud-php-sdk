<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\ListBusinessAccessPointsResponseBody;

use AlibabaCloud\Tea\Model;

class businessAccessPoints extends Model
{
    /**
     * @description The ID of the access point.
     *
     * @example ap-cn-hangzhou-xs-B
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The name of the access point.
     *
     * @var string
     */
    public $accessPointName;

    /**
     * @description The ID of the cloud box.
     *
     * >  This parameter is available if the Express Connect circuit supports cloud boxes and the access point supports cloud boxes.
     * @example cb-****
     *
     * @var string
     */
    public $cloudBoxInstanceIds;

    /**
     * @description The latitude of the access point.
     *
     * @example 30.198416
     *
     * @var float
     */
    public $latitude;

    /**
     * @description The longitude of the access point.
     *
     * @example 120.247514
     *
     * @var float
     */
    public $longitude;

    /**
     * @description The connectivity provider of the Express Connect circuit. Valid values:
     *
     *   **CT**: China Telecom
     *   **CU**: China Unicom
     *   **CM**: China Mobile
     *   **CO**: other connectivity providers in the Chinese mainland
     *   **Equinix**: Equinix
     *   **Other**: other connectivity providers outside the Chinese mainland
     *
     * @example CT
     *
     * @var string
     */
    public $supportLineOperator;

    /**
     * @description The port type supported by the access point. Valid values:
     *
     *   **100Base-T**: 100 Mbit/s copper Ethernet port
     *   **1000Base-T**: 1,000 Mbit/s copper Ethernet port
     *   **1000Base-LX**: 1,000 Mbit/s single-mode optical port (10 km)
     *   **10GBase-T**: 10,000 Mbit/s copper Ethernet port
     *   **10GBase-LR**: 10,000 Mbit/s single-mode optical port (10 kilometers)
     *   **40GBase-LR**: 40,000 Mbit/s single-mode optical port
     *   **100GBase-LR**: 100,000 Mbit/s single-mode optical port
     *
     * >  If you want to use the 40GBase-LR or 100GBase-LR port for an Express Connect circuit, you must first contact your account manager to obtain information about resource supplies.
     * @example 1000Base-T
     *
     * @var string
     */
    public $supportPortTypes;
    protected $_name = [
        'accessPointId'       => 'AccessPointId',
        'accessPointName'     => 'AccessPointName',
        'cloudBoxInstanceIds' => 'CloudBoxInstanceIds',
        'latitude'            => 'Latitude',
        'longitude'           => 'Longitude',
        'supportLineOperator' => 'SupportLineOperator',
        'supportPortTypes'    => 'SupportPortTypes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->accessPointName) {
            $res['AccessPointName'] = $this->accessPointName;
        }
        if (null !== $this->cloudBoxInstanceIds) {
            $res['CloudBoxInstanceIds'] = $this->cloudBoxInstanceIds;
        }
        if (null !== $this->latitude) {
            $res['Latitude'] = $this->latitude;
        }
        if (null !== $this->longitude) {
            $res['Longitude'] = $this->longitude;
        }
        if (null !== $this->supportLineOperator) {
            $res['SupportLineOperator'] = $this->supportLineOperator;
        }
        if (null !== $this->supportPortTypes) {
            $res['SupportPortTypes'] = $this->supportPortTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return businessAccessPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AccessPointName'])) {
            $model->accessPointName = $map['AccessPointName'];
        }
        if (isset($map['CloudBoxInstanceIds'])) {
            $model->cloudBoxInstanceIds = $map['CloudBoxInstanceIds'];
        }
        if (isset($map['Latitude'])) {
            $model->latitude = $map['Latitude'];
        }
        if (isset($map['Longitude'])) {
            $model->longitude = $map['Longitude'];
        }
        if (isset($map['SupportLineOperator'])) {
            $model->supportLineOperator = $map['SupportLineOperator'];
        }
        if (isset($map['SupportPortTypes'])) {
            $model->supportPortTypes = $map['SupportPortTypes'];
        }

        return $model;
    }
}
