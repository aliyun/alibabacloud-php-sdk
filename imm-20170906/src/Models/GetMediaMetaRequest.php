<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetMediaMetaRequest extends Model
{
    /**
     * @var string
     */
    public $project;

    /**
     * @var string
     */
    public $mediaUri;
    protected $_name = [
        'project'  => 'Project',
        'mediaUri' => 'MediaUri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->project) {
            $res['Project'] = $this->project;
        }
        if (null !== $this->mediaUri) {
            $res['MediaUri'] = $this->mediaUri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMediaMetaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }
        if (isset($map['MediaUri'])) {
            $model->mediaUri = $map['MediaUri'];
        }

        return $model;
    }
}
