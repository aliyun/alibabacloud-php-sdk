<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\inputConfig;

use AlibabaCloud\Tea\Model;

class backgroundMusics extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example oss://default/bucket-name/filepath/video.mp3
     *
     * @var string
     */
    public $id;

    /**
     * @description This parameter is required.
     *
     * @example fileKey
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'id' => 'Id',
        'type' => 'Type',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return backgroundMusics
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
