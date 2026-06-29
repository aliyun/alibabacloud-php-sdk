<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class BatchRevokeSeatsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $itemsShrink;

    /**
     * @var string
     */
    public $locale;
    protected $_name = [
        'itemsShrink' => 'Items',
        'locale' => 'Locale',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemsShrink) {
            $res['Items'] = $this->itemsShrink;
        }

        if (null !== $this->locale) {
            $res['Locale'] = $this->locale;
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
        if (isset($map['Items'])) {
            $model->itemsShrink = $map['Items'];
        }

        if (isset($map['Locale'])) {
            $model->locale = $map['Locale'];
        }

        return $model;
    }
}
