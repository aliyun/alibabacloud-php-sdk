<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList;

use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\audio;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\container;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\muxConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\transConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\SearchTemplateResponseBody\templateList\template\video;
use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @var video
     */
    public $video;

    /**
     * @var transConfig
     */
    public $transConfig;

    /**
     * @var string
     */
    public $state;

    /**
     * @var muxConfig
     */
    public $muxConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var audio
     */
    public $audio;

    /**
     * @var string
     */
    public $id;

    /**
     * @var container
     */
    public $container;
    protected $_name = [
        'video'       => 'Video',
        'transConfig' => 'TransConfig',
        'state'       => 'State',
        'muxConfig'   => 'MuxConfig',
        'name'        => 'Name',
        'audio'       => 'Audio',
        'id'          => 'Id',
        'container'   => 'Container',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
        }
        if (null !== $this->transConfig) {
            $res['TransConfig'] = null !== $this->transConfig ? $this->transConfig->toMap() : null;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = null !== $this->muxConfig ? $this->muxConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return template
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Video'])) {
            $model->video = video::fromMap($map['Video']);
        }
        if (isset($map['TransConfig'])) {
            $model->transConfig = transConfig::fromMap($map['TransConfig']);
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['MuxConfig'])) {
            $model->muxConfig = muxConfig::fromMap($map['MuxConfig']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Container'])) {
            $model->container = container::fromMap($map['Container']);
        }

        return $model;
    }
}
