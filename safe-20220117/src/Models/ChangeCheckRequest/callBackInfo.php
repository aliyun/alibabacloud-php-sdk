<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\ChangeCheckRequest;

use AlibabaCloud\Dara\Model;

class callBackInfo extends Model
{
    /**
     * @var string
     */
    public $api;

    /**
     * @var string
     */
    public $apiVersion;

    /**
     * @var string
     */
    public $endPoint;

    /**
     * @var string
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $popProduct;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'api' => 'Api',
        'apiVersion' => 'ApiVersion',
        'endPoint' => 'EndPoint',
        'extraInfo' => 'ExtraInfo',
        'popProduct' => 'PopProduct',
        'regionId' => 'RegionId',
        'type' => 'Type',
        'url' => 'Url',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->api) {
            $res['Api'] = $this->api;
        }

        if (null !== $this->apiVersion) {
            $res['ApiVersion'] = $this->apiVersion;
        }

        if (null !== $this->endPoint) {
            $res['EndPoint'] = $this->endPoint;
        }

        if (null !== $this->extraInfo) {
            $res['ExtraInfo'] = $this->extraInfo;
        }

        if (null !== $this->popProduct) {
            $res['PopProduct'] = $this->popProduct;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['Api'])) {
            $model->api = $map['Api'];
        }

        if (isset($map['ApiVersion'])) {
            $model->apiVersion = $map['ApiVersion'];
        }

        if (isset($map['EndPoint'])) {
            $model->endPoint = $map['EndPoint'];
        }

        if (isset($map['ExtraInfo'])) {
            $model->extraInfo = $map['ExtraInfo'];
        }

        if (isset($map['PopProduct'])) {
            $model->popProduct = $map['PopProduct'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
