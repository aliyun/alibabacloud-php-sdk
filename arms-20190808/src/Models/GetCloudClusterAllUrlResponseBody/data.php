<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetCloudClusterAllUrlResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetCloudClusterAllUrlResponseBody\data\remoteUrl;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The identifier of the cloud service.
     *
     * @example amp
     *
     * @var string
     */
    public $productCode;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The URLs for remote read and write. The value is a JSON string.
     *
     * @var remoteUrl
     */
    public $remoteUrl;
    protected $_name = [
        'productCode' => 'ProductCode',
        'region'      => 'Region',
        'remoteUrl'   => 'RemoteUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->remoteUrl) {
            $res['RemoteUrl'] = null !== $this->remoteUrl ? $this->remoteUrl->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['RemoteUrl'])) {
            $model->remoteUrl = remoteUrl::fromMap($map['RemoteUrl']);
        }

        return $model;
    }
}
