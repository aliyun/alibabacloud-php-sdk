<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\CreateApsDatasoureRequest;

use AlibabaCloud\Tea\Model;

class hiveInfo extends Model
{
    /**
     * @example ******
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example ******
     *
     * @var string
     */
    public $hostConfig;

    /**
     * @example ******
     *
     * @var string
     */
    public $metaStoreUri;

    /**
     * @example sg-uf*******h
     *
     * @var string
     */
    public $securityGroup;

    /**
     * @example vsw-bp1*****k
     *
     * @var string
     */
    public $vswitch;
    protected $_name = [
        'clusterId'     => 'ClusterId',
        'hostConfig'    => 'HostConfig',
        'metaStoreUri'  => 'MetaStoreUri',
        'securityGroup' => 'SecurityGroup',
        'vswitch'       => 'Vswitch',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->hostConfig) {
            $res['HostConfig'] = $this->hostConfig;
        }
        if (null !== $this->metaStoreUri) {
            $res['MetaStoreUri'] = $this->metaStoreUri;
        }
        if (null !== $this->securityGroup) {
            $res['SecurityGroup'] = $this->securityGroup;
        }
        if (null !== $this->vswitch) {
            $res['Vswitch'] = $this->vswitch;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return hiveInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['HostConfig'])) {
            $model->hostConfig = $map['HostConfig'];
        }
        if (isset($map['MetaStoreUri'])) {
            $model->metaStoreUri = $map['MetaStoreUri'];
        }
        if (isset($map['SecurityGroup'])) {
            $model->securityGroup = $map['SecurityGroup'];
        }
        if (isset($map['Vswitch'])) {
            $model->vswitch = $map['Vswitch'];
        }

        return $model;
    }
}
