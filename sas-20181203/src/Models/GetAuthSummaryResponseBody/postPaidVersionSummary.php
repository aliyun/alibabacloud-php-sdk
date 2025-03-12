<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\GetAuthSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class postPaidVersionSummary extends Model
{
    /**
     * @description The type of authorization consumed during binding, with values: - **ASSET**: Consumes the number of authorized devices - **CORE**: Consumes the number of authorized cores - **ASSET_AND_CORE**: Consumes both the number of authorized devices and cores.
     *
     * @example ASSET
     *
     * @var string
     */
    public $authBindType;

    /**
     * @description Current version index, the higher the number, the newer the version, used for sorting. Values: - **1**: Free Edition - **2**: Anti-virus Edition - **3**: Advanced Edition - **4**: Enterprise Edition - **5**: Flagship Edition
     *
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description Number of authorized cores used. > This parameter is valid when AuthBindType is set to CORE or ASSET_AND_CORE.
     *
     * @example 10
     *
     * @var int
     */
    public $usedCoreCount;

    /**
     * @description Number of authorized devices used. > This parameter is valid when AuthBindType is ASSET or ASSET_AND_CORE.
     *
     * @example 10
     *
     * @var int
     */
    public $usedEcsCount;

    /**
     * @description Bound host assets with postpaid versions, values:   - **1**: Free version  - **3**: Enterprise version - **5**: Advanced version - **6**: Anti-virus version     - **7**: Flagship version
     *
     * @example 3
     *
     * @var int
     */
    public $version;
    protected $_name = [
        'authBindType'  => 'AuthBindType',
        'index'         => 'Index',
        'usedCoreCount' => 'UsedCoreCount',
        'usedEcsCount'  => 'UsedEcsCount',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authBindType) {
            $res['AuthBindType'] = $this->authBindType;
        }
        if (null !== $this->index) {
            $res['Index'] = $this->index;
        }
        if (null !== $this->usedCoreCount) {
            $res['UsedCoreCount'] = $this->usedCoreCount;
        }
        if (null !== $this->usedEcsCount) {
            $res['UsedEcsCount'] = $this->usedEcsCount;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return postPaidVersionSummary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthBindType'])) {
            $model->authBindType = $map['AuthBindType'];
        }
        if (isset($map['Index'])) {
            $model->index = $map['Index'];
        }
        if (isset($map['UsedCoreCount'])) {
            $model->usedCoreCount = $map['UsedCoreCount'];
        }
        if (isset($map['UsedEcsCount'])) {
            $model->usedEcsCount = $map['UsedEcsCount'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
