<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribePropertyCountRequest extends Model
{
    /**
     * @description The UUIDs of the assets. Separate multiple UUIDs with commas (,).
     *
     * @example port,process
     *
     * @var string
     */
    public $type;

    /**
     * @description The number of scheduled tasks.
     *
     * @example 9658314a-7609-4426-afc4-2c924072****,
     * 9658314a-7609-4426-afc4-2c924072****
     * @var string
     */
    public $uuidList;
    protected $_name = [
        'type'     => 'Type',
        'uuidList' => 'UuidList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->uuidList) {
            $res['UuidList'] = $this->uuidList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePropertyCountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['UuidList'])) {
            $model->uuidList = $map['UuidList'];
        }

        return $model;
    }
}
