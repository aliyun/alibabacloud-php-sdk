<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Tea\Model;

class ListDictsRequest extends Model
{
    /**
     * @var string
     */
    public $analyzerType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'analyzerType' => 'analyzerType',
        'name'         => 'name',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->analyzerType) {
            $res['analyzerType'] = $this->analyzerType;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDictsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['analyzerType'])) {
            $model->analyzerType = $map['analyzerType'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
