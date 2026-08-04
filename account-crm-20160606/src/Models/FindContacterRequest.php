<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Accountcrm\V20160606\Models;

use AlibabaCloud\Dara\Model;

class FindContacterRequest extends Model
{
    /**
     * @var int
     */
    public $contacterId;

    /**
     * @var string
     */
    public $localeString;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'contacterId' => 'ContacterId',
        'localeString' => 'LocaleString',
        'type' => 'Type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contacterId) {
            $res['ContacterId'] = $this->contacterId;
        }

        if (null !== $this->localeString) {
            $res['LocaleString'] = $this->localeString;
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ContacterId'])) {
            $model->contacterId = $map['ContacterId'];
        }

        if (isset($map['LocaleString'])) {
            $model->localeString = $map['LocaleString'];
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
