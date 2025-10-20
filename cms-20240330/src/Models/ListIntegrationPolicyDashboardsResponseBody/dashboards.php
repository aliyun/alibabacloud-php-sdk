<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\ListIntegrationPolicyDashboardsResponseBody;

use AlibabaCloud\Dara\Model;

class dashboards extends Model
{
    /**
     * @var string
     */
    public $engine;

    /**
     * @var string
     */
    public $folderUid;

    /**
     * @var string
     */
    public $name;

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
        'engine' => 'engine',
        'folderUid' => 'folderUid',
        'name' => 'name',
        'region' => 'region',
        'tags' => 'tags',
        'title' => 'title',
        'uid' => 'uid',
        'url' => 'url',
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
        if (null !== $this->engine) {
            $res['engine'] = $this->engine;
        }

        if (null !== $this->folderUid) {
            $res['folderUid'] = $this->folderUid;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->region) {
            $res['region'] = $this->region;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->uid) {
            $res['uid'] = $this->uid;
        }

        if (null !== $this->url) {
            $res['url'] = $this->url;
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
        if (isset($map['engine'])) {
            $model->engine = $map['engine'];
        }

        if (isset($map['folderUid'])) {
            $model->folderUid = $map['folderUid'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['region'])) {
            $model->region = $map['region'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['uid'])) {
            $model->uid = $map['uid'];
        }

        if (isset($map['url'])) {
            $model->url = $map['url'];
        }

        return $model;
    }
}
