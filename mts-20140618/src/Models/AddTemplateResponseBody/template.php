<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody;

use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\audio;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\container;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\muxConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\transConfig;
use AlibabaCloud\SDK\Mts\V20140618\Models\AddTemplateResponseBody\template\video;
use AlibabaCloud\Tea\Model;

class template extends Model
{
    /**
     * @description The audio codec configurations.
     *
     * @var audio
     */
    public $audio;

    /**
     * @description The container format settings.
     *
     * @var container
     */
    public $container;

    /**
     * @description The ID of the transcoding template. We recommend that you keep this ID for subsequent operation calls.
     *
     * @example 16f01ad6175e4230ac42bb5182cd****
     *
     * @var string
     */
    public $id;

    /**
     * @description The transmuxing settings.
     *
     * @var muxConfig
     */
    public $muxConfig;

    /**
     * @description The name of the transcoding template.
     *
     * @example mps-example
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the template. Valid values:
     *
     *   **Normal**: The template is normal.
     *   **Deleted**: The template is deleted.
     *
     * @example Normal
     *
     * @var string
     */
    public $state;

    /**
     * @description The general transcoding settings.
     *
     * @var transConfig
     */
    public $transConfig;

    /**
     * @description The video codec configurations.
     *
     * @var video
     */
    public $video;
    protected $_name = [
        'audio' => 'Audio',
        'container' => 'Container',
        'id' => 'Id',
        'muxConfig' => 'MuxConfig',
        'name' => 'Name',
        'state' => 'State',
        'transConfig' => 'TransConfig',
        'video' => 'Video',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->audio) {
            $res['Audio'] = null !== $this->audio ? $this->audio->toMap() : null;
        }
        if (null !== $this->container) {
            $res['Container'] = null !== $this->container ? $this->container->toMap() : null;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->muxConfig) {
            $res['MuxConfig'] = null !== $this->muxConfig ? $this->muxConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->transConfig) {
            $res['TransConfig'] = null !== $this->transConfig ? $this->transConfig->toMap() : null;
        }
        if (null !== $this->video) {
            $res['Video'] = null !== $this->video ? $this->video->toMap() : null;
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
        if (isset($map['Audio'])) {
            $model->audio = audio::fromMap($map['Audio']);
        }
        if (isset($map['Container'])) {
            $model->container = container::fromMap($map['Container']);
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
