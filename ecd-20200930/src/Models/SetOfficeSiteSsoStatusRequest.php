<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class SetOfficeSiteSsoStatusRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var bool
     */
    public $enableSso;
    protected $_name = [
        'regionId'     => 'RegionId',
        'officeSiteId' => 'OfficeSiteId',
        'enableSso'    => 'EnableSso',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->enableSso) {
            $res['EnableSso'] = $this->enableSso;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetOfficeSiteSsoStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['EnableSso'])) {
            $model->enableSso = $map['EnableSso'];
        }

        return $model;
    }
}
