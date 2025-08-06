<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vod\V20170321\Models\DataBusinessesValue\sdkCodes;
use AlibabaCloud\SDK\Vod\V20170321\Models\DataBusinessesValue\sdkFeatures;

class DataBusinessesValue extends Model
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
    public $cname;

    /**
     * @var string
     */
    public $sname;

    /**
     * @var sdkCodes[]
     */
    public $sdkCodes;

    /**
     * @var sdkFeatures[]
     */
    public $sdkFeatures;

    /**
     * @var string
     */
    public $version;

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
    public $functionDesc;

    /**
     * @var string
     */
    public $productDesc;

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
    protected $_name = [
        'id' => 'Id',
        'name' => 'Name',
        'cname' => 'Cname',
        'sname' => 'Sname',
        'sdkCodes' => 'SdkCodes',
        'sdkFeatures' => 'SdkFeatures',
        'version' => 'Version',
        'iceOpen' => 'IceOpen',
        'supportPlatform' => 'SupportPlatform',
        'functionDesc' => 'FunctionDesc',
        'productDesc' => 'ProductDesc',
        'size' => 'Size',
        'authorized' => 'Authorized',
        'authorizedApp' => 'AuthorizedApp',
    ];

    public function validate()
    {
        if (\is_array($this->sdkCodes)) {
            Model::validateArray($this->sdkCodes);
        }
        if (\is_array($this->sdkFeatures)) {
            Model::validateArray($this->sdkFeatures);
        }
        if (\is_array($this->authorizedApp)) {
            Model::validateArray($this->authorizedApp);
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

        if (null !== $this->cname) {
            $res['Cname'] = $this->cname;
        }

        if (null !== $this->sname) {
            $res['Sname'] = $this->sname;
        }

        if (null !== $this->sdkCodes) {
            if (\is_array($this->sdkCodes)) {
                $res['SdkCodes'] = [];
                $n1 = 0;
                foreach ($this->sdkCodes as $item1) {
                    $res['SdkCodes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->sdkFeatures) {
            if (\is_array($this->sdkFeatures)) {
                $res['SdkFeatures'] = [];
                $n1 = 0;
                foreach ($this->sdkFeatures as $item1) {
                    $res['SdkFeatures'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        if (null !== $this->iceOpen) {
            $res['IceOpen'] = $this->iceOpen;
        }

        if (null !== $this->supportPlatform) {
            $res['SupportPlatform'] = $this->supportPlatform;
        }

        if (null !== $this->functionDesc) {
            $res['FunctionDesc'] = $this->functionDesc;
        }

        if (null !== $this->productDesc) {
            $res['ProductDesc'] = $this->productDesc;
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

        if (isset($map['Cname'])) {
            $model->cname = $map['Cname'];
        }

        if (isset($map['Sname'])) {
            $model->sname = $map['Sname'];
        }

        if (isset($map['SdkCodes'])) {
            if (!empty($map['SdkCodes'])) {
                $model->sdkCodes = [];
                $n1 = 0;
                foreach ($map['SdkCodes'] as $item1) {
                    $model->sdkCodes[$n1] = sdkCodes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SdkFeatures'])) {
            if (!empty($map['SdkFeatures'])) {
                $model->sdkFeatures = [];
                $n1 = 0;
                foreach ($map['SdkFeatures'] as $item1) {
                    $model->sdkFeatures[$n1] = sdkFeatures::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        if (isset($map['IceOpen'])) {
            $model->iceOpen = $map['IceOpen'];
        }

        if (isset($map['SupportPlatform'])) {
            $model->supportPlatform = $map['SupportPlatform'];
        }

        if (isset($map['FunctionDesc'])) {
            $model->functionDesc = $map['FunctionDesc'];
        }

        if (isset($map['ProductDesc'])) {
            $model->productDesc = $map['ProductDesc'];
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

        return $model;
    }
}
