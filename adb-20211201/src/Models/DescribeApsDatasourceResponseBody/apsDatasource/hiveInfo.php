<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models\DescribeApsDatasourceResponseBody\apsDatasource;

use AlibabaCloud\Dara\Model;

class hiveInfo extends Model
{
    /**
     * @var string
     */
    public $emrClusterId;

    /**
     * @var string
     */
    public $metaStoreUri;

    /**
     * @var string
     */
    public $securityGroup;

    /**
     * @var string
     */
    public $vswitch;
    protected $_name = [
        'emrClusterId' => 'EmrClusterId',
        'metaStoreUri' => 'MetaStoreUri',
        'securityGroup' => 'SecurityGroup',
        'vswitch' => 'Vswitch',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
