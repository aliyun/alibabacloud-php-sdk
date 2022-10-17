<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;

class ReconstructThreeDMultiViewRequest extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $zipFileUrl;
    protected $_name = [
        'mode'       => 'Mode',
        'zipFileUrl' => 'ZipFileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->zipFileUrl) {
            $res['ZipFileUrl'] = $this->zipFileUrl;
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
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ZipFileUrl'])) {
            $model->zipFileUrl = $map['ZipFileUrl'];
        }

        return $model;
    }
}
