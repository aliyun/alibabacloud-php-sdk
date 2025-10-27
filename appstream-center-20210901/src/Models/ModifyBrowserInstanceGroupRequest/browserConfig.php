<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\browserConfig\bookmarks;

class browserConfig extends Model
{
    /**
     * @var bookmarks[]
     */
    public $bookmarks;

    /**
     * @var string
     */
    public $browserParam;

    /**
     * @var string
     */
    public $homepage;

    /**
     * @var string[]
     */
    public $removeBookmarks;
    protected $_name = [
        'bookmarks' => 'Bookmarks',
        'browserParam' => 'BrowserParam',
        'homepage' => 'Homepage',
        'removeBookmarks' => 'RemoveBookmarks',
    ];

    public function validate()
    {
        if (\is_array($this->bookmarks)) {
            Model::validateArray($this->bookmarks);
        }
        if (\is_array($this->removeBookmarks)) {
            Model::validateArray($this->removeBookmarks);
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

        if (null !== $this->browserParam) {
            $res['BrowserParam'] = $this->browserParam;
        }

        if (null !== $this->homepage) {
            $res['Homepage'] = $this->homepage;
        }

        if (null !== $this->removeBookmarks) {
            if (\is_array($this->removeBookmarks)) {
                $res['RemoveBookmarks'] = [];
                $n1 = 0;
                foreach ($this->removeBookmarks as $item1) {
                    $res['RemoveBookmarks'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['BrowserParam'])) {
            $model->browserParam = $map['BrowserParam'];
        }

        if (isset($map['Homepage'])) {
            $model->homepage = $map['Homepage'];
        }

        if (isset($map['RemoveBookmarks'])) {
            if (!empty($map['RemoveBookmarks'])) {
                $model->removeBookmarks = [];
                $n1 = 0;
                foreach ($map['RemoveBookmarks'] as $item1) {
                    $model->removeBookmarks[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
