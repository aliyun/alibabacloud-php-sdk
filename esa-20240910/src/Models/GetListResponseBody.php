<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetListResponseBody extends Model
{
    /**
     * @description The description of the custom list.
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
     * @description The items in the custom list, which are displayed as an array.
     *
     * @var string[]
     */
    public $items;

    /**
     * @description The type of the custom list.
     *
     * @example ip
     *
     * @var string
     */
    public $kind;

    /**
     * @description The name of the custom list.
     *
     * This parameter is required.
     *
     * @example example
     *
     * @var string
     */
    public $name;

    /**
     * @description The request ID.
     *
     * @example 36af3fcc-43d0-441c-86b1-428951dc8225
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The time when the custom list was last modified.
     *
     * @example 2024-01-01T00:00:00Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'description' => 'Description',
        'id' => 'Id',
        'items' => 'Items',
        'kind' => 'Kind',
        'name' => 'Name',
        'requestId' => 'RequestId',
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
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->kind) {
            $res['Kind'] = $this->kind;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetListResponseBody
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
        if (isset($map['Items'])) {
            if (!empty($map['Items'])) {
                $model->items = $map['Items'];
            }
        }
        if (isset($map['Kind'])) {
            $model->kind = $map['Kind'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
