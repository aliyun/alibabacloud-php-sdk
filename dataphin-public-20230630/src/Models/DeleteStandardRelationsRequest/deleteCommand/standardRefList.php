<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\DeleteStandardRelationsRequest\deleteCommand;

use AlibabaCloud\Dara\Model;

class standardRefList extends Model
{
    /**
     * @var int
     */
    public $standardId;
    protected $_name = [
        'standardId' => 'StandardId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->standardId) {
            $res['StandardId'] = $this->standardId;
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
        if (isset($map['StandardId'])) {
            $model->standardId = $map['StandardId'];
        }

        return $model;
    }
}
