<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models\DescribeVpnAttachmentsResponseBody;

use AlibabaCloud\Tea\Model;

class vpnAttachments extends Model
{
    /**
     * @example CEN
     *
     * @var string
     */
    public $attachType;

    /**
     * @example false
     *
     * @var bool
     */
    public $crossAccountAuthorized;

    /**
     * @example desctest
     *
     * @var string
     */
    public $description;

    /**
     * @example vco-p0w2jpkhi2eeop6q6****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example nametest1
     *
     * @var string
     */
    public $name;

    /**
     * @example tr-p0wkh4yryb1dnanqw****
     *
     * @var string
     */
    public $transitRouterId;

    /**
     * @example nametest2
     *
     * @var string
     */
    public $transitRouterName;
    protected $_name = [
        'attachType'             => 'AttachType',
        'crossAccountAuthorized' => 'CrossAccountAuthorized',
        'description'            => 'Description',
        'instanceId'             => 'InstanceId',
        'name'                   => 'Name',
        'transitRouterId'        => 'TransitRouterId',
        'transitRouterName'      => 'TransitRouterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachType) {
            $res['AttachType'] = $this->attachType;
        }
        if (null !== $this->crossAccountAuthorized) {
            $res['CrossAccountAuthorized'] = $this->crossAccountAuthorized;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }
        if (null !== $this->transitRouterName) {
            $res['TransitRouterName'] = $this->transitRouterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return vpnAttachments
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachType'])) {
            $model->attachType = $map['AttachType'];
        }
        if (isset($map['CrossAccountAuthorized'])) {
            $model->crossAccountAuthorized = $map['CrossAccountAuthorized'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }
        if (isset($map['TransitRouterName'])) {
            $model->transitRouterName = $map['TransitRouterName'];
        }

        return $model;
    }
}
