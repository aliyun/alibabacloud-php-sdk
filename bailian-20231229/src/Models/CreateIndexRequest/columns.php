<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\CreateIndexRequest;

use AlibabaCloud\Tea\Model;

class columns extends Model
{
    /**
     * @var string
     */
    public $column;

    /**
     * @var bool
     */
    public $isRecall;

    /**
     * @var bool
     */
    public $isSearch;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'column'   => 'Column',
        'isRecall' => 'IsRecall',
        'isSearch' => 'IsSearch',
        'name'     => 'Name',
        'type'     => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = $this->column;
        }
        if (null !== $this->isRecall) {
            $res['IsRecall'] = $this->isRecall;
        }
        if (null !== $this->isSearch) {
            $res['IsSearch'] = $this->isSearch;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Column'])) {
            $model->column = $map['Column'];
        }
        if (isset($map['IsRecall'])) {
            $model->isRecall = $map['IsRecall'];
        }
        if (isset($map['IsSearch'])) {
            $model->isSearch = $map['IsSearch'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
