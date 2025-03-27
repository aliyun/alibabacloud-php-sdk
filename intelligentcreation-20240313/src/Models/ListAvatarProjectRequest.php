<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class ListAvatarProjectRequest extends Model
{
    /**
     * @var string[]
     */
    public $projectIdList;
    protected $_name = [
        'projectIdList' => 'projectIdList',
    ];

    public function validate()
    {
        if (\is_array($this->projectIdList)) {
            Model::validateArray($this->projectIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectIdList) {
            if (\is_array($this->projectIdList)) {
                $res['projectIdList'] = [];
                $n1 = 0;
                foreach ($this->projectIdList as $item1) {
                    $res['projectIdList'][$n1++] = $item1;
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
        if (isset($map['projectIdList'])) {
            if (!empty($map['projectIdList'])) {
                $model->projectIdList = [];
                $n1 = 0;
                foreach ($map['projectIdList'] as $item1) {
                    $model->projectIdList[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
