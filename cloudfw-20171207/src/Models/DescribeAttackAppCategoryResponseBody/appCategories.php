<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeAttackAppCategoryResponseBody;

use AlibabaCloud\Dara\Model;

class appCategories extends Model
{
    /**
     * @var string[]
     */
    public $attackApps;

    /**
     * @var string
     */
    public $categoryName;
    protected $_name = [
        'attackApps' => 'AttackApps',
        'categoryName' => 'CategoryName',
    ];

    public function validate()
    {
        if (\is_array($this->attackApps)) {
            Model::validateArray($this->attackApps);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attackApps) {
            if (\is_array($this->attackApps)) {
                $res['AttackApps'] = [];
                $n1 = 0;
                foreach ($this->attackApps as $item1) {
                    $res['AttackApps'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->categoryName) {
            $res['CategoryName'] = $this->categoryName;
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
        if (isset($map['AttackApps'])) {
            if (!empty($map['AttackApps'])) {
                $model->attackApps = [];
                $n1 = 0;
                foreach ($map['AttackApps'] as $item1) {
                    $model->attackApps[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['CategoryName'])) {
            $model->categoryName = $map['CategoryName'];
        }

        return $model;
    }
}
