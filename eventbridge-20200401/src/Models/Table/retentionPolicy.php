<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\Table;

use AlibabaCloud\Dara\Model;

class retentionPolicy extends Model
{
    /**
     * @var int
     */
    public $coldTTL;

    /**
     * @var int
     */
    public $hotTTL;
    protected $_name = [
        'coldTTL' => 'ColdTTL',
        'hotTTL' => 'HotTTL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->coldTTL) {
            $res['ColdTTL'] = $this->coldTTL;
        }

        if (null !== $this->hotTTL) {
            $res['HotTTL'] = $this->hotTTL;
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
        if (isset($map['ColdTTL'])) {
            $model->coldTTL = $map['ColdTTL'];
        }

        if (isset($map['HotTTL'])) {
            $model->hotTTL = $map['HotTTL'];
        }

        return $model;
    }
}
