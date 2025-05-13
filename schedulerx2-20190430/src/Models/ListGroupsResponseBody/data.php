<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Schedulerx2\V20190430\Models\ListGroupsResponseBody\data\appGroups;

class data extends Model
{
    /**
     * @var appGroups[]
     */
    public $appGroups;
    protected $_name = [
        'appGroups' => 'AppGroups',
    ];

    public function validate()
    {
        if (\is_array($this->appGroups)) {
            Model::validateArray($this->appGroups);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appGroups) {
            if (\is_array($this->appGroups)) {
                $res['AppGroups'] = [];
                $n1 = 0;
                foreach ($this->appGroups as $item1) {
                    $res['AppGroups'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AppGroups'])) {
            if (!empty($map['AppGroups'])) {
                $model->appGroups = [];
                $n1 = 0;
                foreach ($map['AppGroups'] as $item1) {
                    $model->appGroups[$n1++] = appGroups::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
