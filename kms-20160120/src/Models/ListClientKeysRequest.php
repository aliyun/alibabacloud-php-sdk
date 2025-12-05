<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\Dara\Model;

class ListClientKeysRequest extends Model
{
    /**
     * @var string
     */
    public $aapName;
    protected $_name = [
        'aapName' => 'AapName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aapName) {
            $res['AapName'] = $this->aapName;
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
        if (isset($map['AapName'])) {
            $model->aapName = $map['AapName'];
        }

        return $model;
    }
}
