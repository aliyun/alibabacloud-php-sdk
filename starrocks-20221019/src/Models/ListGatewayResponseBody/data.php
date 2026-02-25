<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Starrocks\V20221019\Models\ListGatewayResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $enablePublicNet;

    /**
     * @var int
     */
    public $feNodeNumber;

    /**
     * @var string
     */
    public $gatewayId;

    /**
     * @var string
     */
    public $gatewayName;

    /**
     * @var string
     */
    public $gatewayType;

    /**
     * @var string
     */
    public $internalDomain;

    /**
     * @var string
     */
    public $internalSlbId;

    /**
     * @var string
     */
    public $privatezoneId;

    /**
     * @var string
     */
    public $publicDomain;

    /**
     * @var string
     */
    public $publicSlbAclId;

    /**
     * @var string
     */
    public $publicSlbId;
    protected $_name = [
        'enablePublicNet' => 'EnablePublicNet',
        'feNodeNumber' => 'FeNodeNumber',
        'gatewayId' => 'GatewayId',
        'gatewayName' => 'GatewayName',
        'gatewayType' => 'GatewayType',
        'internalDomain' => 'InternalDomain',
        'internalSlbId' => 'InternalSlbId',
        'privatezoneId' => 'PrivatezoneId',
        'publicDomain' => 'PublicDomain',
        'publicSlbAclId' => 'PublicSlbAclId',
        'publicSlbId' => 'PublicSlbId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enablePublicNet) {
            $res['EnablePublicNet'] = $this->enablePublicNet;
        }

        if (null !== $this->feNodeNumber) {
            $res['FeNodeNumber'] = $this->feNodeNumber;
        }

        if (null !== $this->gatewayId) {
            $res['GatewayId'] = $this->gatewayId;
        }

        if (null !== $this->gatewayName) {
            $res['GatewayName'] = $this->gatewayName;
        }

        if (null !== $this->gatewayType) {
            $res['GatewayType'] = $this->gatewayType;
        }

        if (null !== $this->internalDomain) {
            $res['InternalDomain'] = $this->internalDomain;
        }

        if (null !== $this->internalSlbId) {
            $res['InternalSlbId'] = $this->internalSlbId;
        }

        if (null !== $this->privatezoneId) {
            $res['PrivatezoneId'] = $this->privatezoneId;
        }

        if (null !== $this->publicDomain) {
            $res['PublicDomain'] = $this->publicDomain;
        }

        if (null !== $this->publicSlbAclId) {
            $res['PublicSlbAclId'] = $this->publicSlbAclId;
        }

        if (null !== $this->publicSlbId) {
            $res['PublicSlbId'] = $this->publicSlbId;
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
        if (isset($map['EnablePublicNet'])) {
            $model->enablePublicNet = $map['EnablePublicNet'];
        }

        if (isset($map['FeNodeNumber'])) {
            $model->feNodeNumber = $map['FeNodeNumber'];
        }

        if (isset($map['GatewayId'])) {
            $model->gatewayId = $map['GatewayId'];
        }

        if (isset($map['GatewayName'])) {
            $model->gatewayName = $map['GatewayName'];
        }

        if (isset($map['GatewayType'])) {
            $model->gatewayType = $map['GatewayType'];
        }

        if (isset($map['InternalDomain'])) {
            $model->internalDomain = $map['InternalDomain'];
        }

        if (isset($map['InternalSlbId'])) {
            $model->internalSlbId = $map['InternalSlbId'];
        }

        if (isset($map['PrivatezoneId'])) {
            $model->privatezoneId = $map['PrivatezoneId'];
        }

        if (isset($map['PublicDomain'])) {
            $model->publicDomain = $map['PublicDomain'];
        }

        if (isset($map['PublicSlbAclId'])) {
            $model->publicSlbAclId = $map['PublicSlbAclId'];
        }

        if (isset($map['PublicSlbId'])) {
            $model->publicSlbId = $map['PublicSlbId'];
        }

        return $model;
    }
}
