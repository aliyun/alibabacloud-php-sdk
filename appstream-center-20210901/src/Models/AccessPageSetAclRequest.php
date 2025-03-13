<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class AccessPageSetAclRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example FREE_ACCESS
     *
     * @var string
     */
    public $accessMode;

    /**
     * @description This parameter is required.
     *
     * @example a-062wec3cwmayw****
     *
     * @var string
     */
    public $accessPageId;

    /**
     * @example notepad_test
     *
     * @var string
     */
    public $accessPageName;

    /**
     * @description This parameter is required.
     *
     * @example 7
     *
     * @var int
     */
    public $effectTime;

    /**
     * @example Day
     *
     * @var string
     */
    public $unit;
    protected $_name = [
        'accessMode'     => 'AccessMode',
        'accessPageId'   => 'AccessPageId',
        'accessPageName' => 'AccessPageName',
        'effectTime'     => 'EffectTime',
        'unit'           => 'Unit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessMode) {
            $res['AccessMode'] = $this->accessMode;
        }
        if (null !== $this->accessPageId) {
            $res['AccessPageId'] = $this->accessPageId;
        }
        if (null !== $this->accessPageName) {
            $res['AccessPageName'] = $this->accessPageName;
        }
        if (null !== $this->effectTime) {
            $res['EffectTime'] = $this->effectTime;
        }
        if (null !== $this->unit) {
            $res['Unit'] = $this->unit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AccessPageSetAclRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessMode'])) {
            $model->accessMode = $map['AccessMode'];
        }
        if (isset($map['AccessPageId'])) {
            $model->accessPageId = $map['AccessPageId'];
        }
        if (isset($map['AccessPageName'])) {
            $model->accessPageName = $map['AccessPageName'];
        }
        if (isset($map['EffectTime'])) {
            $model->effectTime = $map['EffectTime'];
        }
        if (isset($map['Unit'])) {
            $model->unit = $map['Unit'];
        }

        return $model;
    }
}
