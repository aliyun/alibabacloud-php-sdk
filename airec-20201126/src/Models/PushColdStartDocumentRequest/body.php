<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Airec\V20201126\Models\PushColdStartDocumentRequest;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @var string
     */
    public $cmd;

    /**
     * @var mixed
     */
    public $fields;
    protected $_name = [
        'cmd'    => 'cmd',
        'fields' => 'fields',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmd) {
            $res['cmd'] = $this->cmd;
        }
        if (null !== $this->fields) {
            $res['fields'] = $this->fields;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cmd'])) {
            $model->cmd = $map['cmd'];
        }
        if (isset($map['fields'])) {
            $model->fields = $map['fields'];
        }

        return $model;
    }
}
