<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeAutomateResponseConfigCounterResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The total number of rules.
     *
     * @example 20
     *
     * @var int
     */
    public $all;

    /**
     * @description The number of enabled rules.
     *
     * @example 10
     *
     * @var int
     */
    public $online;
    protected $_name = [
        'all'    => 'All',
        'online' => 'Online',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
