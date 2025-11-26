<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeSensitiveSwitchResponseBody;

use AlibabaCloud\Dara\Model;

class userSensitiveDataSwitchList extends Model
{
    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $sensitiveCategory;

    /**
     * @var string
     */
    public $sensitiveLevel;

    /**
     * @var int
     */
    public $switchStatus;
    protected $_name = [
        'categoryName' => 'CategoryName',
        'description' => 'Description',
        'sensitiveCategory' => 'SensitiveCategory',
        'sensitiveLevel' => 'SensitiveLevel',
        'switchStatus' => 'SwitchStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->sensitiveCategory) {
            $res['SensitiveCategory'] = $this->sensitiveCategory;
        }

        if (null !== $this->sensitiveLevel) {
            $res['SensitiveLevel'] = $this->sensitiveLevel;
        }

        if (null !== $this->switchStatus) {
            $res['SwitchStatus'] = $this->switchStatus;
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
        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['SensitiveCategory'])) {
            $model->sensitiveCategory = $map['SensitiveCategory'];
        }

        if (isset($map['SensitiveLevel'])) {
            $model->sensitiveLevel = $map['SensitiveLevel'];
        }

        if (isset($map['SwitchStatus'])) {
            $model->switchStatus = $map['SwitchStatus'];
        }

        return $model;
    }
}
