<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesResponseBody\transitRouterRouteEntries;

use AlibabaCloud\Tea\Model;

class pathAttributes extends Model
{
    /**
     * @var string[]
     */
    public $asPaths;

    /**
     * @var string[]
     */
    public $communities;

    /**
     * @var string
     */
    public $originInstanceId;

    /**
     * @var string
     */
    public $originInstanceType;

    /**
     * @var string
     */
    public $originRouteType;

    /**
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
