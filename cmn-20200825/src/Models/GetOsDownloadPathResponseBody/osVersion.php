<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\GetOsDownloadPathResponseBody;

use AlibabaCloud\Tea\Model;

class osVersion extends Model
{
    /**
     * @example htts://xxxkkk
     *
     * @var string
     */
    public $downloadPath;
    protected $_name = [
        'downloadPath' => 'DownloadPath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->downloadPath) {
            $res['DownloadPath'] = $this->downloadPath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return osVersion
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DownloadPath'])) {
            $model->downloadPath = $map['DownloadPath'];
        }

        return $model;
    }
}
