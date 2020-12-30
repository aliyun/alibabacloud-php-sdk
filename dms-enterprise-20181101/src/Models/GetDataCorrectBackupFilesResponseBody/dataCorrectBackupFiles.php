<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetDataCorrectBackupFilesResponseBody;

use AlibabaCloud\Tea\Model;

class dataCorrectBackupFiles extends Model
{
    /**
     * @var string[]
     */
    public $fileUrl;
    protected $_name = [
        'fileUrl' => 'FileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dataCorrectBackupFiles
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileUrl'])) {
            if (!empty($map['FileUrl'])) {
                $model->fileUrl = $map['FileUrl'];
            }
        }

        return $model;
    }
}
