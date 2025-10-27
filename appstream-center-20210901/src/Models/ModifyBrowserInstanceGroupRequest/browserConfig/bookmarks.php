<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ModifyBrowserInstanceGroupRequest\browserConfig;

use AlibabaCloud\Dara\Model;

class bookmarks extends Model
{
    /**
     * @var string
     */
    public $bookmarkFolder;

    /**
     * @var string
     */
    public $bookmarkId;

    /**
     * @var string
     */
    public $bookmarkName;

    /**
     * @var string
     */
    public $bookmarkURL;
    protected $_name = [
        'bookmarkFolder' => 'BookmarkFolder',
        'bookmarkId' => 'BookmarkId',
        'bookmarkName' => 'BookmarkName',
        'bookmarkURL' => 'BookmarkURL',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bookmarkFolder) {
            $res['BookmarkFolder'] = $this->bookmarkFolder;
        }

        if (null !== $this->bookmarkId) {
            $res['BookmarkId'] = $this->bookmarkId;
        }

        if (null !== $this->bookmarkName) {
            $res['BookmarkName'] = $this->bookmarkName;
        }

        if (null !== $this->bookmarkURL) {
            $res['BookmarkURL'] = $this->bookmarkURL;
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
        if (isset($map['BookmarkFolder'])) {
            $model->bookmarkFolder = $map['BookmarkFolder'];
        }

        if (isset($map['BookmarkId'])) {
            $model->bookmarkId = $map['BookmarkId'];
        }

        if (isset($map['BookmarkName'])) {
            $model->bookmarkName = $map['BookmarkName'];
        }

        if (isset($map['BookmarkURL'])) {
            $model->bookmarkURL = $map['BookmarkURL'];
        }

        return $model;
    }
}
