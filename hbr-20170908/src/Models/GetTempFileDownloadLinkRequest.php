<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models;

use AlibabaCloud\Tea\Model;

class GetTempFileDownloadLinkRequest extends Model
{
    /**
     * @description The key that is used to download a file.
     *
     * @example temp/1797733170015112/report/r-000jdzknbp39cnf9hs99/r-000jdzknbp39cnf9hs99-total.csv
     *
     * @var string
     */
    public $tempFileKey;
    protected $_name = [
        'tempFileKey' => 'TempFileKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tempFileKey) {
            $res['TempFileKey'] = $this->tempFileKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTempFileDownloadLinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TempFileKey'])) {
            $model->tempFileKey = $map['TempFileKey'];
        }

        return $model;
    }
}
