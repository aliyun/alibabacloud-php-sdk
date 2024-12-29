<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource;

use AlibabaCloud\Tea\Model;

class hiveInfo extends Model
{
    /**
     * @example -
     *
     * @var string
     */
    public $emrClusterId;

    /**
     * @description hive meta store url。
     *
     * @example -
     *
     * @var string
     */
    public $metaStoreUri;

    /**
     * @example sg-******
     *
     * @var string
     */
    public $securityGroup;

    /**
     * @example vsw-******
     *
     * @var string
     */
    public $vswitch;
    protected $_name = [
        'emrClusterId'  => 'EmrClusterId',
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
        if (null !== $this->emrClusterId) {
            $res['EmrClusterId'] = $this->emrClusterId;
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
        if (isset($map['EmrClusterId'])) {
            $model->emrClusterId = $map['EmrClusterId'];
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
