<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesResponseBody\transitRouterRouteEntries;

use AlibabaCloud\Tea\Model;

class pathAttributes extends Model
{
    /**
     * @description The route AS path.
     *
     * @var string[]
     */
    public $asPaths;

    /**
     * @description The route community.
     *
     * @var string[]
     */
    public $communities;

    /**
     * @description The source instance ID.
     *
     * @example vbr-m5ent6du8deaq5*****
     *
     * @var string
     */
    public $originInstanceId;

    /**
     * @description The source instance type. Valid values:
     *
     *   **VPC**
     *   **VBR**
     *   **TR**
     *   **VPN**
     *   **CCN**
     *
     * @example VBR
     *
     * @var string
     */
    public $originInstanceType;

    /**
     * @description The route type. Valid values:
     *
     *   **System**
     *   **Custom**
     *   **static**
     *   **BGP**
     *   **BlackHole**
     *
     * @example BGP
     *
     * @var string
     */
    public $originRouteType;

    /**
     * @description The route priority.
     *
     * A smaller value indicates a higher priority.
     * @example 50
     *
     * @var int
     */
    public $preference;
    protected $_name = [
        'asPaths'            => 'AsPaths',
        'communities'        => 'Communities',
        'originInstanceId'   => 'OriginInstanceId',
        'originInstanceType' => 'OriginInstanceType',
        'originRouteType'    => 'OriginRouteType',
        'preference'         => 'Preference',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asPaths) {
            $res['AsPaths'] = $this->asPaths;
        }
        if (null !== $this->communities) {
            $res['Communities'] = $this->communities;
        }
        if (null !== $this->originInstanceId) {
            $res['OriginInstanceId'] = $this->originInstanceId;
        }
        if (null !== $this->originInstanceType) {
            $res['OriginInstanceType'] = $this->originInstanceType;
        }
        if (null !== $this->originRouteType) {
            $res['OriginRouteType'] = $this->originRouteType;
        }
        if (null !== $this->preference) {
            $res['Preference'] = $this->preference;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pathAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPaths'])) {
            if (!empty($map['AsPaths'])) {
                $model->asPaths = $map['AsPaths'];
            }
        }
        if (isset($map['Communities'])) {
            if (!empty($map['Communities'])) {
                $model->communities = $map['Communities'];
            }
        }
        if (isset($map['OriginInstanceId'])) {
            $model->originInstanceId = $map['OriginInstanceId'];
        }
        if (isset($map['OriginInstanceType'])) {
            $model->originInstanceType = $map['OriginInstanceType'];
        }
        if (isset($map['OriginRouteType'])) {
            $model->originRouteType = $map['OriginRouteType'];
        }
        if (isset($map['Preference'])) {
            $model->preference = $map['Preference'];
        }

        return $model;
    }
}
