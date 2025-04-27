<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models\Elasticsearch;

use AlibabaCloud\Dara\Model;

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
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->gcName) {
            $res['gcName'] = $this->gcName;
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
        if (isset($map['gcName'])) {
            $model->gcName = $map['gcName'];
        }

        return $model;
    }
}
