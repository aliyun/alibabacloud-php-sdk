<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\DataBusinessesValue;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DataBusinessesValue\sdkCodes\integrate;

class sdkCodes extends Model
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $sellPrice;

    /**
     * @var int
     */
    public $iceOpen;

    /**
     * @var int
     */
    public $supportPlatform;

    /**
     * @var string
     */
    public $size;

    /**
     * @var int
     */
    public $authorized;

    /**
     * @var string[]
     */
    public $authorizedApp;

    /**
     * @var string
     */
    public $defaultFeature;

    /**
     * @var integrate[]
     */
    public $integrate;

    /**
     * @var string
     */
    public $subscription;

    /**
     * @var string
     */
    public $productDesc;

    /**
     * @var string
     */
    public $subscriptionPkg;

    /**
     * @var string
     */
    public $subscriptionImp;
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'sellPrice' => 'SellPrice',
        'iceOpen' => 'IceOpen',
        'supportPlatform' => 'SupportPlatform',
        'size' => 'Size',
        'authorized' => 'Authorized',
        'authorizedApp' => 'AuthorizedApp',
        'defaultFeature' => 'DefaultFeature',
        'integrate' => 'Integrate',
        'subscription' => 'Subscription',
        'productDesc' => 'ProductDesc',
        'subscriptionPkg' => 'SubscriptionPkg',
        'subscriptionImp' => 'SubscriptionImp',
    ];

    public function validate()
    {
        if (\is_array($this->authorizedApp)) {
            Model::validateArray($this->authorizedApp);
        }
        if (\is_array($this->integrate)) {
            Model::validateArray($this->integrate);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->sellPrice) {
            $res['SellPrice'] = $this->sellPrice;
        }

        if (null !== $this->iceOpen) {
            $res['IceOpen'] = $this->iceOpen;
        }

        if (null !== $this->supportPlatform) {
            $res['SupportPlatform'] = $this->supportPlatform;
        }

        if (null !== $this->size) {
            $res['Size'] = $this->size;
        }

        if (null !== $this->authorized) {
            $res['Authorized'] = $this->authorized;
        }

        if (null !== $this->authorizedApp) {
            if (\is_array($this->authorizedApp)) {
                $res['AuthorizedApp'] = [];
                $n1 = 0;
                foreach ($this->authorizedApp as $item1) {
                    $res['AuthorizedApp'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->defaultFeature) {
            $res['DefaultFeature'] = $this->defaultFeature;
        }

        if (null !== $this->integrate) {
            if (\is_array($this->integrate)) {
                $res['Integrate'] = [];
                $n1 = 0;
                foreach ($this->integrate as $item1) {
                    $res['Integrate'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->subscription) {
            $res['Subscription'] = $this->subscription;
        }

        if (null !== $this->productDesc) {
            $res['ProductDesc'] = $this->productDesc;
        }

        if (null !== $this->subscriptionPkg) {
            $res['SubscriptionPkg'] = $this->subscriptionPkg;
        }

        if (null !== $this->subscriptionImp) {
            $res['SubscriptionImp'] = $this->subscriptionImp;
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
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['SellPrice'])) {
            $model->sellPrice = $map['SellPrice'];
        }

        if (isset($map['IceOpen'])) {
            $model->iceOpen = $map['IceOpen'];
        }

        if (isset($map['SupportPlatform'])) {
            $model->supportPlatform = $map['SupportPlatform'];
        }

        if (isset($map['Size'])) {
            $model->size = $map['Size'];
        }

        if (isset($map['Authorized'])) {
            $model->authorized = $map['Authorized'];
        }

        if (isset($map['AuthorizedApp'])) {
            if (!empty($map['AuthorizedApp'])) {
                $model->authorizedApp = [];
                $n1 = 0;
                foreach ($map['AuthorizedApp'] as $item1) {
                    $model->authorizedApp[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DefaultFeature'])) {
            $model->defaultFeature = $map['DefaultFeature'];
        }

        if (isset($map['Integrate'])) {
            if (!empty($map['Integrate'])) {
                $model->integrate = [];
                $n1 = 0;
                foreach ($map['Integrate'] as $item1) {
                    $model->integrate[$n1] = integrate::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Subscription'])) {
            $model->subscription = $map['Subscription'];
        }

        if (isset($map['ProductDesc'])) {
            $model->productDesc = $map['ProductDesc'];
        }

        if (isset($map['SubscriptionPkg'])) {
            $model->subscriptionPkg = $map['SubscriptionPkg'];
        }

        if (isset($map['SubscriptionImp'])) {
            $model->subscriptionImp = $map['SubscriptionImp'];
        }

        return $model;
    }
}
