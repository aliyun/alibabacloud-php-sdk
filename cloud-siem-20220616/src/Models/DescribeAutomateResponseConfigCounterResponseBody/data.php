<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigCounterResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $all;

    /**
     * @var int
     */
    public $online;
    protected $_name = [
        'all' => 'All',
        'online' => 'Online',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }

        if (null !== $this->online) {
            $res['Online'] = $this->online;
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
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }

        if (isset($map['Online'])) {
            $model->online = $map['Online'];
        }

        return $model;
    }
}
