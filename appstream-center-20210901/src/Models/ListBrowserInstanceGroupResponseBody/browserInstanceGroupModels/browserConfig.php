<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListBrowserInstanceGroupResponseBody\browserInstanceGroupModels;

use AlibabaCloud\Dara\Model;

class browserConfig extends Model
{
    /**
     * @var string
     */
    public $browserParam;

    /**
     * @var string
     */
    public $cookiesSync;

    /**
     * @var string
     */
    public $homepage;
    protected $_name = [
        'browserParam' => 'BrowserParam',
        'cookiesSync' => 'CookiesSync',
        'homepage' => 'Homepage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->browserParam) {
            $res['BrowserParam'] = $this->browserParam;
        }

        if (null !== $this->cookiesSync) {
            $res['CookiesSync'] = $this->cookiesSync;
        }

        if (null !== $this->homepage) {
            $res['Homepage'] = $this->homepage;
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
        if (isset($map['BrowserParam'])) {
            $model->browserParam = $map['BrowserParam'];
        }

        if (isset($map['CookiesSync'])) {
            $model->cookiesSync = $map['CookiesSync'];
        }

        if (isset($map['Homepage'])) {
            $model->homepage = $map['Homepage'];
        }

        return $model;
    }
}
