<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\GetMediaResourceIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The download URL of the resource.
     *
     * @example http://test-example.com/download.jpg
     *
     * @var string
     */
    public $resUrlDownload;

    /**
     * @description The resource ID.
     *
     * @example SMS_14571****
     *
     * @var int
     */
    public $resourceId;
    protected $_name = [
        'resUrlDownload' => 'ResUrlDownload',
        'resourceId'     => 'ResourceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resUrlDownload) {
            $res['ResUrlDownload'] = $this->resUrlDownload;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['ResUrlDownload'])) {
            $model->resUrlDownload = $map['ResUrlDownload'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        return $model;
    }
}
