<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\audio;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\container;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\muxConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\transConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\video;

class template extends Model
{
    /**
     * @var audio
     */
    public $audio;

    /**
     * @var container
     */
    public $container;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var muxConfig
     */
    public $muxConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $state;

    /**
     * @var transConfig
     */
    public $transConfig;

    /**
     * @var video
     */
    public $video;
    protected $_name = [
        'audio' => 'Audio',
        'container' => 'Container',
        'creationTime' => 'CreationTime',
        'id' => 'Id',
        'muxConfig' => 'MuxConfig',
        'name' => 'Name',
        'state' => 'State',
        'transConfig' => 'TransConfig',
        'video' => 'Video',
    ];

    public function validate()
    {
        if (null !== $this->audio) {
            $this->audio->validate();
        }
        if (null !== $this->container) {
            $this->container->validate();
        }
        if (null !== $this->muxConfig) {
            $this->muxConfig->validate();
        }
        if (null !== $this->transConfig) {
            $this->transConfig->validate();
        }
        if (null !== $this->video) {
            $this->video->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toArray($noStream) : $this->audio;
        }

        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toArray($noStream) : $this->container;
        }

        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = null !== $this->muxConfig ? $this->muxConfig->toArray($noStream) : $this->muxConfig;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        if (null !== $this->transConfig) {
            $res['TransConfig'] = null !== $this->transConfig ? $this->transConfig->toArray($noStream) : $this->transConfig;
        }

        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toArray($noStream) : $this->video;
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
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }

        if (isset($map['Container'])) {
            $model->container = container::fromMap($map['Container']);
        }

        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['MuxConfig'])) {
            $model->muxConfig = muxConfig::fromMap($map['MuxConfig']);
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        if (isset($map['TransConfig'])) {
            $model->transConfig = transConfig::fromMap($map['TransConfig']);
        }

        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }

        return $model;
    }
}
