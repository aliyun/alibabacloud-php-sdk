<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class ListLogosRequest extends Model
{
    /**
     * @var string
     */
    public $brandName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $industryId;

    /**
     * @var string
     */
    public $industryName;

    /**
     * @var string
     */
    public $logoVersion;

    /**
     * @var int
     */
    public $page;

    /**
     * @var string
     */
    public $slogan;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'brandName'    => 'BrandName',
        'description'  => 'Description',
        'industryId'   => 'IndustryId',
        'industryName' => 'IndustryName',
        'logoVersion'  => 'LogoVersion',
        'page'         => 'Page',
        'slogan'       => 'Slogan',
        'type'         => 'Type',
        'userId'       => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->brandName) {
            $res['BrandName'] = $this->brandName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->industryId) {
            $res['IndustryId'] = $this->industryId;
        }
        if (null !== $this->industryName) {
            $res['IndustryName'] = $this->industryName;
        }
        if (null !== $this->logoVersion) {
            $res['LogoVersion'] = $this->logoVersion;
        }
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->slogan) {
            $res['Slogan'] = $this->slogan;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogosRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BrandName'])) {
            $model->brandName = $map['BrandName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IndustryId'])) {
            $model->industryId = $map['IndustryId'];
        }
        if (isset($map['IndustryName'])) {
            $model->industryName = $map['IndustryName'];
        }
        if (isset($map['LogoVersion'])) {
            $model->logoVersion = $map['LogoVersion'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['Slogan'])) {
            $model->slogan = $map['Slogan'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
