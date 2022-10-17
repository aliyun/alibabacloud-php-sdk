<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ReconstructThreeDMultiViewAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $mode;

    /**
     * @var Stream
     */
    public $zipFileUrlObject;
    protected $_name = [
        'mode'             => 'Mode',
        'zipFileUrlObject' => 'ZipFileUrl',
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
        if (null !== $this->zipFileUrlObject) {
            $res['ZipFileUrl'] = $this->zipFileUrlObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReconstructThreeDMultiViewAdvanceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['ZipFileUrl'])) {
            $model->zipFileUrlObject = $map['ZipFileUrl'];
        }

        return $model;
    }
}
