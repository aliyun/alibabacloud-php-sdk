<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\GenerateVideoPlaylistRequest;

use AlibabaCloud\Tea\Model;

class sourceSubtitles extends Model
{
    /**
     * @description The subtitle language. If you configure this parameter, the value must comply with the ISO 639-2 standard. By default, this parameter is left empty.
     *
     * @example eng
     *
     * @var string
     */
    public $language;

    /**
     * @description The OSS path of the subtitle file.
     *
     * The OSS path must be in the oss://${Bucket}/${Object} format. ${Bucket} specifies the name of the OSS bucket that is in the same region as the current project. ${Object} specifies the full path of the file.
     *
     * >  The **MasterURI** parameter cannot be left empty, and the OSS path `oss://${Bucket}/${Object}` of a subtitle file must be in the directory specified by the **MasterURI** parameter or its subdirectory.
     *
     * This parameter is required.
     * @example oss://test-bucket/test-object/subtitle/eng.vtt
     *
     * @var string
     */
    public $URI;
    protected $_name = [
        'language' => 'Language',
        'URI'      => 'URI',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->URI) {
            $res['URI'] = $this->URI;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sourceSubtitles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['URI'])) {
            $model->URI = $map['URI'];
        }

        return $model;
    }
}
