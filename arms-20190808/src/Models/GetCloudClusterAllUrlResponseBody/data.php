<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetCloudClusterAllUrlResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\GetCloudClusterAllUrlResponseBody\data\remoteUrl;

class data extends Model
{
    /**
     * @var string
     */
    public $productCode;
    /**
     * @var string
     */
    public $region;
    /**
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
        if (null !== $this->remoteUrl) {
            $this->remoteUrl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->remoteUrl) {
            $res['RemoteUrl'] = null !== $this->remoteUrl ? $this->remoteUrl->toArray($noStream) : $this->remoteUrl;
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
