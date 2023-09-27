<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\Tea\Model;

class CreateRaceWorkForInnerRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $keywords;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @var string
     */
    public $securityToken;

    /**
     * @var string
     */
    public $shortDescription;

    /**
     * @var string
     */
    public $workName;
    protected $_name = [
        'commodityCode'    => 'CommodityCode',
        'groupId'          => 'GroupId',
        'keywords'         => 'Keywords',
        'logoUrl'          => 'LogoUrl',
        'securityToken'    => 'SecurityToken',
        'shortDescription' => 'ShortDescription',
        'workName'         => 'WorkName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->keywords) {
            $res['Keywords'] = $this->keywords;
        }
        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }
        if (null !== $this->securityToken) {
            $res['SecurityToken'] = $this->securityToken;
        }
        if (null !== $this->shortDescription) {
            $res['ShortDescription'] = $this->shortDescription;
        }
        if (null !== $this->workName) {
            $res['WorkName'] = $this->workName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRaceWorkForInnerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['Keywords'])) {
            $model->keywords = $map['Keywords'];
        }
        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }
        if (isset($map['SecurityToken'])) {
            $model->securityToken = $map['SecurityToken'];
        }
        if (isset($map['ShortDescription'])) {
            $model->shortDescription = $map['ShortDescription'];
        }
        if (isset($map['WorkName'])) {
            $model->workName = $map['WorkName'];
        }

        return $model;
    }
}
