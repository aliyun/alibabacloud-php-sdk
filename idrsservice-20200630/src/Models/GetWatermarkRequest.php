<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idrsservice\V20200630\Models;

use AlibabaCloud\Tea\Model;

class GetWatermarkRequest extends Model
{
    /**
     * @example {"version":"1.0.0"}
     *
     * @var string
     */
    public $clientBaseParam;

    /**
     * @example 1.0.003
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example 728fd812a876ec04818858982baebe6f
     *
     * @var string
     */
    public $watermarkId;
    protected $_name = [
        'clientBaseParam' => 'ClientBaseParam',
        'clientVersion'   => 'ClientVersion',
        'watermarkId'     => 'WatermarkId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientBaseParam) {
            $res['ClientBaseParam'] = $this->clientBaseParam;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->watermarkId) {
            $res['WatermarkId'] = $this->watermarkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWatermarkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientBaseParam'])) {
            $model->clientBaseParam = $map['ClientBaseParam'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['WatermarkId'])) {
            $model->watermarkId = $map['WatermarkId'];
        }

        return $model;
    }
}
