<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauthconsole\V20190403\Models;

use AlibabaCloud\Tea\Model;

class RetrieveFaceRequest extends Model
{
    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $face64String;

    /**
     * @var string
     */
    public $faceUrl;
    protected $_name = [
        'projectId'    => 'ProjectId',
        'face64String' => 'Face64String',
        'faceUrl'      => 'FaceUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->face64String) {
            $res['Face64String'] = $this->face64String;
        }
        if (null !== $this->faceUrl) {
            $res['FaceUrl'] = $this->faceUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RetrieveFaceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Face64String'])) {
            $model->face64String = $map['Face64String'];
        }
        if (isset($map['FaceUrl'])) {
            $model->faceUrl = $map['FaceUrl'];
        }

        return $model;
    }
}
