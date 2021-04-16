<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CDRS\V20201101\Models;

use AlibabaCloud\Tea\Model;

class ListDataStatisticsRequest extends Model
{
    /**
     * @var string
     */
    public $backCategory;

    /**
     * @var string
     */
    public $schema;
    protected $_name = [
        'backCategory' => 'BackCategory',
        'schema'       => 'Schema',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backCategory) {
            $res['BackCategory'] = $this->backCategory;
        }
        if (null !== $this->schema) {
            $res['Schema'] = $this->schema;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDataStatisticsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackCategory'])) {
            $model->backCategory = $map['BackCategory'];
        }
        if (isset($map['Schema'])) {
            $model->schema = $map['Schema'];
        }

        return $model;
    }
}
