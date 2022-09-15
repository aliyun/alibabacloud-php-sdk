<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Tea\Model;

class AddServiceSourceShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $address;

    /**
     * @var string
     */
    public $gatewayUniqueId;

    /**
     * @var string
     */
    public $groupListShrink;

    /**
     * @var string
     */
    public $ingressOptionsRequestShrink;

    /**
     * @var string
     */
    public $mseSessionId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'acceptLanguage'              => 'AcceptLanguage',
        'address'                     => 'Address',
        'gatewayUniqueId'             => 'GatewayUniqueId',
        'groupListShrink'             => 'GroupList',
        'ingressOptionsRequestShrink' => 'IngressOptionsRequest',
        'mseSessionId'                => 'MseSessionId',
        'name'                        => 'Name',
        'source'                      => 'Source',
        'type'                        => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->gatewayUniqueId) {
            $res['GatewayUniqueId'] = $this->gatewayUniqueId;
        }
        if (null !== $this->groupListShrink) {
            $res['GroupList'] = $this->groupListShrink;
        }
        if (null !== $this->ingressOptionsRequestShrink) {
            $res['IngressOptionsRequest'] = $this->ingressOptionsRequestShrink;
        }
        if (null !== $this->mseSessionId) {
            $res['MseSessionId'] = $this->mseSessionId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddServiceSourceShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['GatewayUniqueId'])) {
            $model->gatewayUniqueId = $map['GatewayUniqueId'];
        }
        if (isset($map['GroupList'])) {
            $model->groupListShrink = $map['GroupList'];
        }
        if (isset($map['IngressOptionsRequest'])) {
            $model->ingressOptionsRequestShrink = $map['IngressOptionsRequest'];
        }
        if (isset($map['MseSessionId'])) {
            $model->mseSessionId = $map['MseSessionId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
