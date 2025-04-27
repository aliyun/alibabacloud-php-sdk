<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Elasticsearch\V20170613\Models;

use AlibabaCloud\Dara\Model;

class ListAllNodeRequest extends Model
{
    /**
     * @var bool
     */
    public $extended;
    protected $_name = [
        'extended' => 'extended',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extended) {
            $res['extended'] = $this->extended;
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
        if (isset($map['extended'])) {
            $model->extended = $map['extended'];
        }

        return $model;
    }
}
