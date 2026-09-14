<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\QueryApmGrafanaDataResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $data;
    protected $_name = [
        'data' => 'data',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['data'] = $this->data;
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
        if (isset($map['data'])) {
            $model->data = $map['data'];
        }

        return $model;
    }
}
