<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeOmsOpenAPIProjectResponseBody\data;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description The number of projects that use this label.
     *
     * @example 3
     *
     * @var int
     */
    public $count;

    /**
     * @description The creator. This parameter value is returned only when you log on as the administrator.
     *
     * @example Zhang San
     *
     * @var string
     */
    public $creator;

    /**
     * @description The ID of a label.
     *
     * @example abc
     *
     * @var string
     */
    public $id;

    /**
     * @description The name of the label.
     *
     * @example label_name
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'count'   => 'Count',
        'creator' => 'Creator',
        'id'      => 'Id',
        'name'    => 'Name',
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
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
