<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListEnvironmentDashboardsResponseBody\data;

use AlibabaCloud\Dara\Model;

class dashboards extends Model
{
    /**
     * @var string
     */
    public $folderUid;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $uid;

    /**
     * @var string
     */
    public $url;
    protected $_name = [
        'folderUid' => 'FolderUid',
        'region' => 'Region',
        'tags' => 'Tags',
        'title' => 'Title',
        'uid' => 'Uid',
        'url' => 'Url',
    ];

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->folderUid) {
            $res['FolderUid'] = $this->folderUid;
        }

        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
        }

        if (null !== $this->url) {
            $res['Url'] = $this->url;
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
        if (isset($map['FolderUid'])) {
            $model->folderUid = $map['FolderUid'];
        }

        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }

        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        if (isset($map['Url'])) {
            $model->url = $map['Url'];
        }

        return $model;
    }
}
