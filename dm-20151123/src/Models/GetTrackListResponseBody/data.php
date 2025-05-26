<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dm\V20151123\Models\GetTrackListResponseBody\data\stat;

class data extends Model
{
    /**
     * @var stat[]
     */
    public $stat;
    protected $_name = [
        'stat' => 'stat',
    ];

    public function validate()
    {
        if (\is_array($this->stat)) {
            Model::validateArray($this->stat);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->stat) {
            if (\is_array($this->stat)) {
                $res['stat'] = [];
                $n1 = 0;
                foreach ($this->stat as $item1) {
                    $res['stat'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['stat'])) {
            if (!empty($map['stat'])) {
                $model->stat = [];
                $n1 = 0;
                foreach ($map['stat'] as $item1) {
                    $model->stat[$n1++] = stat::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
