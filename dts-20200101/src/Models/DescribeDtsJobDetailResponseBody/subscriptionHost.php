<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\DescribeDtsJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class subscriptionHost extends Model
{
    /**
     * @description The endpoint of the change tracking instance.
     *
     * @example dts-cn-****-internal.aliyuncs.com:18002
     *
     * @var string
     */
    public $privateHost;

    /**
     * @description Indicates whether schema migration or schema synchronization is performed. Valid values:
     *
     *   **true**: Schema migration or schema synchronization is performed.
     *   **false**: Schema migration or schema synchronization is not performed.
     *
     * @example dts-cn-****.aliyuncs.com:18001
     *
     * @var string
     */
    public $publicHost;

    /**
     * @description Indicates whether incremental data migration or synchronization is performed. Valid values:
     *
     *   **true**: Incremental data migration or synchronization is performed.
     *   **false**: Incremental data migration or synchronization is not performed.
     *
     * @example dts-cn-****-vpc.aliyuncs.com:18003
     *
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
