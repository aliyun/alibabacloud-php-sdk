<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\Tea\Model;

class DescribeRaceWorkForInnerResponseBody extends Model
{
    /**
     * @var string
     */
    public $commodityCode;

    /**
     * @var string
     */
    public $createTime;

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
    public $modifiedTime;

    /**
     * @var string
     */
    public $requestId;

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
        'createTime'       => 'CreateTime',
        'groupId'          => 'GroupId',
        'keywords'         => 'Keywords',
        'logoUrl'          => 'LogoUrl',
        'modifiedTime'     => 'ModifiedTime',
        'requestId'        => 'RequestId',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
     * @return DescribeRaceWorkForInnerResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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
