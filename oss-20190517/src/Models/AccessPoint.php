<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Oss\V20190517\Models;

use AlibabaCloud\Tea\Model;

class AccessPoint extends Model
{
    /**
     * @var string
     */
    public $accessPointName;

    /**
     * @var string
     */
    public $alias;

    /**
     * @var string
     */
    public $bucket;

    /**
     * @var string
     */
    public $networkOrigin;

    /**
     * @var string
     */
    public $status;

    /**
     * @var AccessPointVpcConfiguration
     */
    public $vpcConfiguration;
    protected $_name = [
        'accessPointName'  => 'AccessPointName',
        'alias'            => 'Alias',
        'bucket'           => 'Bucket',
        'networkOrigin'    => 'NetworkOrigin',
        'status'           => 'Status',
        'vpcConfiguration' => 'VpcConfiguration',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPointName) {
            $res['AccessPointName'] = $this->accessPointName;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->networkOrigin) {
            $res['NetworkOrigin'] = $this->networkOrigin;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcConfiguration) {
            $res['VpcConfiguration'] = null !== $this->vpcConfiguration ? $this->vpcConfiguration->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AccessPoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPointName'])) {
            $model->accessPointName = $map['AccessPointName'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['NetworkOrigin'])) {
            $model->networkOrigin = $map['NetworkOrigin'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcConfiguration'])) {
            $model->vpcConfiguration = AccessPointVpcConfiguration::fromMap($map['VpcConfiguration']);
        }

        return $model;
    }
}
