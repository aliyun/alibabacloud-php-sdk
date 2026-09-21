<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\CreateBrowserInstanceGroupRequest\browserConfig\bookmarks;

class browserConfig extends Model
{
    /**
     * @var bookmarks[]
     */
    public $bookmarks;

    /**
     * @var string
     */
    public $bookmarksFilePath;

    /**
     * @var string
     */
    public $browserParam;

    /**
     * @var bool
     */
    public $cookiesSync;

    /**
     * @var string
     */
    public $homepage;
    protected $_name = [
        'bookmarks' => 'Bookmarks',
        'bookmarksFilePath' => 'BookmarksFilePath',
        'browserParam' => 'BrowserParam',
        'cookiesSync' => 'CookiesSync',
        'homepage' => 'Homepage',
    ];

    public function validate()
    {
        if (\is_array($this->bookmarks)) {
            Model::validateArray($this->bookmarks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookmarks) {
            if (\is_array($this->bookmarks)) {
                $res['Bookmarks'] = [];
                $n1 = 0;
                foreach ($this->bookmarks as $item1) {
                    $res['Bookmarks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bookmarksFilePath) {
            $res['BookmarksFilePath'] = $this->bookmarksFilePath;
        }

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
        if (isset($map['Bookmarks'])) {
            if (!empty($map['Bookmarks'])) {
                $model->bookmarks = [];
                $n1 = 0;
                foreach ($map['Bookmarks'] as $item1) {
                    $model->bookmarks[$n1] = bookmarks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BookmarksFilePath'])) {
            $model->bookmarksFilePath = $map['BookmarksFilePath'];
        }

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
