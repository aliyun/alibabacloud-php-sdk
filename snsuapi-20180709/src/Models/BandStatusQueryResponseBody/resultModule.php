<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Snsuapi\V20180709\Models\BandStatusQueryResponseBody;

use AlibabaCloud\Tea\Model;

class resultModule extends Model
{
    /**
     * @var int
     */
    public $uploadTarget;

    /**
     * @var int
     */
    public $downloadTarget;
    protected $_name = [
        'uploadTarget'   => 'UploadTarget',
        'downloadTarget' => 'DownloadTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->uploadTarget) {
            $res['UploadTarget'] = $this->uploadTarget;
        }
        if (null !== $this->downloadTarget) {
            $res['DownloadTarget'] = $this->downloadTarget;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resultModule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UploadTarget'])) {
            $model->uploadTarget = $map['UploadTarget'];
        }
        if (isset($map['DownloadTarget'])) {
            $model->downloadTarget = $map['DownloadTarget'];
        }

        return $model;
    }
}
