<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListPromotionActivitiesForPartnerResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListPromotionActivitiesForPartnerResponseBody\module\activities;

class module extends Model
{
    /**
     * @var activities[]
     */
    public $activities;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'activities' => 'Activities',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->activities)) {
            Model::validateArray($this->activities);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activities) {
            if (\is_array($this->activities)) {
                $res['Activities'] = [];
                $n1 = 0;
                foreach ($this->activities as $item1) {
                    $res['Activities'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['Activities'])) {
            if (!empty($map['Activities'])) {
                $model->activities = [];
                $n1 = 0;
                foreach ($map['Activities'] as $item1) {
                    $model->activities[$n1] = activities::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
