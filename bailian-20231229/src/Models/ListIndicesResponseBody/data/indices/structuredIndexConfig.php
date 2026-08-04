<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\ListIndicesResponseBody\data\indices;

use AlibabaCloud\Dara\Model;

class structuredIndexConfig extends Model
{
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
        'isRecall' => 'IsRecall',
        'isSearch' => 'IsSearch',
        'name' => 'Name',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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
