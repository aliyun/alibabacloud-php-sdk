<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class subscriptionHost extends Model
{
    /**
     * @var string
     */
    public $privateHost;

    /**
     * @var string
     */
    public $publicHost;

    /**
     * @var string
     */
    public $vpcHost;
    protected $_name = [
        'privateHost' => 'PrivateHost',
        'publicHost'  => 'PublicHost',
        'vpcHost'     => 'VpcHost',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->privateHost) {
            $res['PrivateHost'] = $this->privateHost;
        }
        if (null !== $this->publicHost) {
            $res['PublicHost'] = $this->publicHost;
        }
        if (null !== $this->vpcHost) {
            $res['VpcHost'] = $this->vpcHost;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return subscriptionHost
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrivateHost'])) {
            $model->privateHost = $map['PrivateHost'];
        }
        if (isset($map['PublicHost'])) {
            $model->publicHost = $map['PublicHost'];
        }
        if (isset($map['VpcHost'])) {
            $model->vpcHost = $map['VpcHost'];
        }

        return $model;
    }
}
