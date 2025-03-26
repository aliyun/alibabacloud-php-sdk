<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;

class ModifyOfficeSiteMfaEnabledRequest extends Model
{
    /**
     * @var bool
     */
    public $mfaEnabled;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'mfaEnabled' => 'MfaEnabled',
        'officeSiteId' => 'OfficeSiteId',
        'regionId' => 'RegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mfaEnabled) {
            $res['MfaEnabled'] = $this->mfaEnabled;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['MfaEnabled'])) {
            $model->mfaEnabled = $map['MfaEnabled'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
