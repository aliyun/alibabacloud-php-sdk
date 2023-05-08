<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeNsasSuspEventTypeResponseBody;

use AlibabaCloud\Tea\Model;

class eventTypes extends Model
{
    /**
     * @example Unusual Logon
     *
     * @var string
     */
    public $name;

    /**
     * @example 22
     *
     * @var int
     */
    public $suspEventCount;

    /**
     * @example Unusual Logon
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'name'           => 'Name',
        'suspEventCount' => 'SuspEventCount',
        'type'           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->suspEventCount) {
            $res['SuspEventCount'] = $this->suspEventCount;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eventTypes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SuspEventCount'])) {
            $model->suspEventCount = $map['SuspEventCount'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
