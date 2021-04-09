<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;

class ReconstructThreeDMultiViewRequest extends Model
{
    /**
     * @description A short description of struct
     *
     * @var string
     */
    public $zipFileUrl;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'zipFileUrl' => 'ZipFileUrl',
        'mode'       => 'Mode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zipFileUrl) {
            $res['ZipFileUrl'] = $this->zipFileUrl;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReconstructThreeDMultiViewRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ZipFileUrl'])) {
            $model->zipFileUrl = $map['ZipFileUrl'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
