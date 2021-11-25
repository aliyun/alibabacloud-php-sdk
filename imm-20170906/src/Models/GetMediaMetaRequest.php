<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20170906\Models;

use AlibabaCloud\Tea\Model;

class GetMediaMetaRequest extends Model
{
    /**
     * @var string
     */
    public $mediaUri;

    /**
     * @var string
     */
    public $project;
    protected $_name = [
        'mediaUri' => 'MediaUri',
        'project'  => 'Project',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mediaUri) {
            $res['MediaUri'] = $this->mediaUri;
        }
        if (null !== $this->project) {
            $res['Project'] = $this->project;
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
        if (isset($map['MediaUri'])) {
            $model->mediaUri = $map['MediaUri'];
        }
        if (isset($map['Project'])) {
            $model->project = $map['Project'];
        }

        return $model;
    }
}
