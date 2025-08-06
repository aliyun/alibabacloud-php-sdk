<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class ListNavigationByFormTypeRequest extends Model
{
    /**
     * @var string
     */
    public $appType;

    /**
     * @var string
     */
    public $formType;

    /**
     * @var string
     */
    public $language;

    /**
     * @var string
     */
    public $systemToken;
    protected $_name = [
        'appType' => 'AppType',
        'formType' => 'FormType',
        'language' => 'Language',
        'systemToken' => 'SystemToken',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }

        if (null !== $this->formType) {
            $res['FormType'] = $this->formType;
        }

        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }

        if (null !== $this->systemToken) {
            $res['SystemToken'] = $this->systemToken;
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
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }

        if (isset($map['FormType'])) {
            $model->formType = $map['FormType'];
        }

        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }

        if (isset($map['SystemToken'])) {
            $model->systemToken = $map['SystemToken'];
        }

        return $model;
    }
}
