<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioProjectListResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Iot\V20180120\Models\QueryStudioProjectListResponseBody\data\list_\projectInfo;

class list_ extends Model
{
    /**
     * @var projectInfo[]
     */
    public $projectInfo;
    protected $_name = [
        'projectInfo' => 'ProjectInfo',
    ];

    public function validate()
    {
        if (\is_array($this->projectInfo)) {
            Model::validateArray($this->projectInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->projectInfo) {
            if (\is_array($this->projectInfo)) {
                $res['ProjectInfo'] = [];
                $n1 = 0;
                foreach ($this->projectInfo as $item1) {
                    $res['ProjectInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ProjectInfo'])) {
            if (!empty($map['ProjectInfo'])) {
                $model->projectInfo = [];
                $n1 = 0;
                foreach ($map['ProjectInfo'] as $item1) {
                    $model->projectInfo[$n1] = projectInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
