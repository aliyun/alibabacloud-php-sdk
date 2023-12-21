<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XrEngine\V20230313\Models\PopObjectRetrievalResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $coverUrl;

    /**
     * @var string
     */
    public $glbUrl;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $modelUrl;

    /**
     * @var string
     */
    public $previewUrl;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'coverUrl'   => 'CoverUrl',
        'glbUrl'     => 'GlbUrl',
        'id'         => 'Id',
        'modelUrl'   => 'ModelUrl',
        'previewUrl' => 'PreviewUrl',
        'title'      => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverUrl) {
            $res['CoverUrl'] = $this->coverUrl;
        }
        if (null !== $this->glbUrl) {
            $res['GlbUrl'] = $this->glbUrl;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->modelUrl) {
            $res['ModelUrl'] = $this->modelUrl;
        }
        if (null !== $this->previewUrl) {
            $res['PreviewUrl'] = $this->previewUrl;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverUrl'])) {
            $model->coverUrl = $map['CoverUrl'];
        }
        if (isset($map['GlbUrl'])) {
            $model->glbUrl = $map['GlbUrl'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['ModelUrl'])) {
            $model->modelUrl = $map['ModelUrl'];
        }
        if (isset($map['PreviewUrl'])) {
            $model->previewUrl = $map['PreviewUrl'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
