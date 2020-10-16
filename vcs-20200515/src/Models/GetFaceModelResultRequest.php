<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class GetFaceModelResultRequest extends Model
{
    /**
     * @var string
     */
    public $pictureId;

    /**
     * @var string
     */
    public $pictureContent;

    /**
     * @var string
     */
    public $pictureUrl;
    protected $_name = [
        'pictureId'      => 'PictureId',
        'pictureContent' => 'PictureContent',
        'pictureUrl'     => 'PictureUrl',
    ];

    public function validate()
    {
        Model::validateRequired('pictureId', $this->pictureId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pictureId) {
            $res['PictureId'] = $this->pictureId;
        }
        if (null !== $this->pictureContent) {
            $res['PictureContent'] = $this->pictureContent;
        }
        if (null !== $this->pictureUrl) {
            $res['PictureUrl'] = $this->pictureUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFaceModelResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PictureId'])) {
            $model->pictureId = $map['PictureId'];
        }
        if (isset($map['PictureContent'])) {
            $model->pictureContent = $map['PictureContent'];
        }
        if (isset($map['PictureUrl'])) {
            $model->pictureUrl = $map['PictureUrl'];
        }

        return $model;
    }
}
