<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeThreatIntelligenceSwitchResponseBody;

use AlibabaCloud\Dara\Model;

class categoryList extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $categoryDescribe;

    /**
     * @var string
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $categoryParentId;

    /**
     * @var int
     */
    public $enableStatus;
    protected $_name = [
        'action' => 'Action',
        'categoryDescribe' => 'CategoryDescribe',
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'categoryParentId' => 'CategoryParentId',
        'enableStatus' => 'EnableStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->categoryDescribe) {
            $res['CategoryDescribe'] = $this->categoryDescribe;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->categoryParentId) {
            $res['CategoryParentId'] = $this->categoryParentId;
        }

        if (null !== $this->enableStatus) {
            $res['EnableStatus'] = $this->enableStatus;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['CategoryDescribe'])) {
            $model->categoryDescribe = $map['CategoryDescribe'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['CategoryParentId'])) {
            $model->categoryParentId = $map['CategoryParentId'];
        }

        if (isset($map['EnableStatus'])) {
            $model->enableStatus = $map['EnableStatus'];
        }

        return $model;
    }
}
