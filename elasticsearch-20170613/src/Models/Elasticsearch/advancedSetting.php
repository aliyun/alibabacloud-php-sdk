<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Elasticsearch;

use AlibabaCloud\Tea\Model;

class advancedSetting extends Model
{
    /**
     * @var string
     */
    public $gcName;
    protected $_name = [
        'gcName' => 'gcName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gcName) {
            $res['gcName'] = $this->gcName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return advancedSetting
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gcName'])) {
            $model->gcName = $map['gcName'];
        }

        return $model;
    }
}
