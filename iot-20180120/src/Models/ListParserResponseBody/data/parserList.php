<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListParserResponseBody\data;

use AlibabaCloud\Tea\Model;

class parserList extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @example DataParser
     *
     * @var string
     */
    public $name;

    /**
     * @example 1001
     *
     * @var int
     */
    public $parserId;

    /**
     * @example STOP
     *
     * @var string
     */
    public $status;

    /**
     * @example 2022-03-21T12:45:43.000Z
     *
     * @var string
     */
    public $utcCreated;

    /**
     * @example 2022-03-25T12:45:43.000Z
     *
     * @var string
     */
    public $utcModified;
    protected $_name = [
        'description' => 'Description',
        'name'        => 'Name',
        'parserId'    => 'ParserId',
        'status'      => 'Status',
        'utcCreated'  => 'UtcCreated',
        'utcModified' => 'UtcModified',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->parserId) {
            $res['ParserId'] = $this->parserId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->utcCreated) {
            $res['UtcCreated'] = $this->utcCreated;
        }
        if (null !== $this->utcModified) {
            $res['UtcModified'] = $this->utcModified;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return parserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ParserId'])) {
            $model->parserId = $map['ParserId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UtcCreated'])) {
            $model->utcCreated = $map['UtcCreated'];
        }
        if (isset($map['UtcModified'])) {
            $model->utcModified = $map['UtcModified'];
        }

        return $model;
    }
}
