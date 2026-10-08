<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListUserAuthorizedResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class content extends Model
{
    /**
     * @var mixed
     */
    public $data;

    /**
     * @var mixed
     */
    public $metadata;
    protected $_name = [
        'data' => 'Data',
        'metadata' => 'Metadata',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
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
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        return $model;
    }
}
