<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class ConfigADConnectorTrustRequest extends Model
{
    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $trustKey;
    protected $_name = [
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
        'trustKey'     => 'TrustKey',
    ];

    public function validate()
    {
        Model::validateRequired('officeSiteId', $this->officeSiteId, true);
        Model::validateRequired('regionId', $this->regionId, true);
        Model::validateRequired('trustKey', $this->trustKey, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->trustKey) {
            $res['TrustKey'] = $this->trustKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ConfigADConnectorTrustRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TrustKey'])) {
            $model->trustKey = $map['TrustKey'];
        }

        return $model;
    }
}
