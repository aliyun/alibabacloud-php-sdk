<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models\ListListsResponseBody;

use AlibabaCloud\Tea\Model;

class lists extends Model
{
    /**
     * @description The list description.
     *
     * @example a custom list
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the custom list.[](~~2850217~~)
     *
     * @example 40000001
     *
     * @var int
     */
    public $id;

    /**
     * @description The list type.
     *
     * @example ip
     *
     * @var string
     */
    public $kind;

    /**
     * @description The length of the list information array, which indicates how many items the list contains.
     *
     * @example 100
     *
     * @var int
     */
    public $length;

    /**
     * @description The list name.
     *
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the list was last modified.
     *
     * @example 2024-01-01T00:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'kind' => 'Kind',
        'length' => 'Length',
        'name' => 'Name',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->length) {
            $res['Length'] = $this->length;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return lists
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Length'])) {
            $model->length = $map['Length'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
