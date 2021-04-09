<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Threedvision\V20210131\Models;

use AlibabaCloud\Tea\Model;
use GuzzleHttp\Psr7\Stream;

class ReconstructThreeDMultiViewAdvanceRequest extends Model
{
    /**
     * @var Stream
     */
    public $zipFileUrlObject;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'zipFileUrlObject' => 'ZipFileUrlObject',
        'mode'             => 'Mode',
    ];

    public function validate()
    {
        Model::validateRequired('zipFileUrlObject', $this->zipFileUrlObject, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->zipFileUrlObject) {
            $res['ZipFileUrlObject'] = $this->zipFileUrlObject;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
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
        if (isset($map['ZipFileUrlObject'])) {
            $model->zipFileUrlObject = $map['ZipFileUrlObject'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }

        return $model;
    }
}
