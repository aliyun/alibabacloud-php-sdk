<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\UpdateCloudAppInfoRequest;

use AlibabaCloud\Dara\Model;

class patch extends Model
{
    /**
     * @var string
     */
    public $downloadURL;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $patchName;
    protected $_name = [
        'downloadURL' => 'DownloadURL',
        'md5' => 'Md5',
        'patchName' => 'PatchName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->downloadURL) {
            $res['DownloadURL'] = $this->downloadURL;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->patchName) {
            $res['PatchName'] = $this->patchName;
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
        if (isset($map['DownloadURL'])) {
            $model->downloadURL = $map['DownloadURL'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['PatchName'])) {
            $model->patchName = $map['PatchName'];
        }

        return $model;
    }
}
