<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\Dara\Model;

class ShareLinkDetail extends Model
{
    /**
     * @var bool
     */
    public $enableOfficeEditable;
    protected $_name = [
        'enableOfficeEditable' => 'enable_office_editable',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enableOfficeEditable) {
            $res['enable_office_editable'] = $this->enableOfficeEditable;
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
        if (isset($map['enable_office_editable'])) {
            $model->enableOfficeEditable = $map['enable_office_editable'];
        }

        return $model;
    }
}
