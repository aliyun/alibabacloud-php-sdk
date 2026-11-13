<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\ListApplicationsResponseBody;

use AlibabaCloud\Dara\Model;

class applications extends Model
{
    /**
     * @var int
     */
    public $applicationId;

    /**
     * @var string
     */
    public $applicationName;

    /**
     * @var int
     */
    public $categoryId;

    /**
     * @var string
     */
    public $categoryName;

    /**
     * @var string
     */
    public $defaultAction;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $level;

    /**
     * @var string[]
     */
    public $protocol;

    /**
     * @var string[]
     */
    public $requirements;

    /**
     * @var string
     */
    public $risk;

    /**
     * @var string
     */
    public $technology;

    /**
     * @var int
     */
    public $updatedTime;

    /**
     * @var string
     */
    public $vendor;
    protected $_name = [
        'applicationId' => 'ApplicationId',
        'applicationName' => 'ApplicationName',
        'categoryId' => 'CategoryId',
        'categoryName' => 'CategoryName',
        'defaultAction' => 'DefaultAction',
        'description' => 'Description',
        'groupName' => 'GroupName',
        'level' => 'Level',
        'protocol' => 'Protocol',
        'requirements' => 'Requirements',
        'risk' => 'Risk',
        'technology' => 'Technology',
        'updatedTime' => 'UpdatedTime',
        'vendor' => 'Vendor',
    ];

    public function validate()
    {
        if (\is_array($this->protocol)) {
            Model::validateArray($this->protocol);
        }
        if (\is_array($this->requirements)) {
            Model::validateArray($this->requirements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationId) {
            $res['ApplicationId'] = $this->applicationId;
        }

        if (null !== $this->applicationName) {
            $res['ApplicationName'] = $this->applicationName;
        }

        if (null !== $this->categoryId) {
            $res['CategoryId'] = $this->categoryId;
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
        }

        if (null !== $this->defaultAction) {
            $res['DefaultAction'] = $this->defaultAction;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->protocol) {
            if (\is_array($this->protocol)) {
                $res['Protocol'] = [];
                $n1 = 0;
                foreach ($this->protocol as $item1) {
                    $res['Protocol'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requirements) {
            if (\is_array($this->requirements)) {
                $res['Requirements'] = [];
                $n1 = 0;
                foreach ($this->requirements as $item1) {
                    $res['Requirements'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->risk) {
            $res['Risk'] = $this->risk;
        }

        if (null !== $this->technology) {
            $res['Technology'] = $this->technology;
        }

        if (null !== $this->updatedTime) {
            $res['UpdatedTime'] = $this->updatedTime;
        }

        if (null !== $this->vendor) {
            $res['Vendor'] = $this->vendor;
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
        if (isset($map['ApplicationId'])) {
            $model->applicationId = $map['ApplicationId'];
        }

        if (isset($map['ApplicationName'])) {
            $model->applicationName = $map['ApplicationName'];
        }

        if (isset($map['CategoryId'])) {
            $model->categoryId = $map['CategoryId'];
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        if (isset($map['DefaultAction'])) {
            $model->defaultAction = $map['DefaultAction'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['Protocol'])) {
            if (!empty($map['Protocol'])) {
                $model->protocol = [];
                $n1 = 0;
                foreach ($map['Protocol'] as $item1) {
                    $model->protocol[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Requirements'])) {
            if (!empty($map['Requirements'])) {
                $model->requirements = [];
                $n1 = 0;
                foreach ($map['Requirements'] as $item1) {
                    $model->requirements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Risk'])) {
            $model->risk = $map['Risk'];
        }

        if (isset($map['Technology'])) {
            $model->technology = $map['Technology'];
        }

        if (isset($map['UpdatedTime'])) {
            $model->updatedTime = $map['UpdatedTime'];
        }

        if (isset($map['Vendor'])) {
            $model->vendor = $map['Vendor'];
        }

        return $model;
    }
}
