<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UploadResponseBody;

use AlibabaCloud\Dara\Model;

class uploadResult extends Model
{
    /**
     * @var string
     */
    public $fid;
    /**
     * @var string
     */
    public $fileName;
    /**
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'fid'        => 'Fid',
        'fileName'   => 'FileName',
        'uploadTime' => 'UploadTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fid) {
            $res['Fid'] = $this->fid;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fid'])) {
            $model->fid = $map['Fid'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
