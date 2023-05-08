<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeGroupedTagsResponseBody;

use AlibabaCloud\Tea\Model;

class groupedFileds extends Model
{
    /**
     * @example 152
     *
     * @var string
     */
    public $count;

    /**
     * @example InternetIp
     *
     * @var string
     */
    public $name;

    /**
     * @example 3252366
     *
     * @var int
     */
    public $tagId;
    protected $_name = [
        'count' => 'Count',
        'name'  => 'Name',
        'tagId' => 'TagId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->tagId) {
            $res['TagId'] = $this->tagId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupedFileds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['TagId'])) {
            $model->tagId = $map['TagId'];
        }

        return $model;
    }
}
