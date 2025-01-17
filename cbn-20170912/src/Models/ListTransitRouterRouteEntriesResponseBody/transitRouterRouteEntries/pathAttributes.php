<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models\ListTransitRouterRouteEntriesResponseBody\transitRouterRouteEntries;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->asPaths)) {
            Model::validateArray($this->asPaths);
        }
        if (\is_array($this->communities)) {
            Model::validateArray($this->communities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asPaths) {
            if (\is_array($this->asPaths)) {
                $res['AsPaths'] = [];
                $n1             = 0;
                foreach ($this->asPaths as $item1) {
                    $res['AsPaths'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->communities) {
            if (\is_array($this->communities)) {
                $res['Communities'] = [];
                $n1                 = 0;
                foreach ($this->communities as $item1) {
                    $res['Communities'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AsPaths'])) {
            if (!empty($map['AsPaths'])) {
                $model->asPaths = [];
                $n1             = 0;
                foreach ($map['AsPaths'] as $item1) {
                    $model->asPaths[$n1++] = $item1;
                }
            }
        }

        if (isset($map['Communities'])) {
            if (!empty($map['Communities'])) {
                $model->communities = [];
                $n1                 = 0;
                foreach ($map['Communities'] as $item1) {
                    $model->communities[$n1++] = $item1;
                }
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
