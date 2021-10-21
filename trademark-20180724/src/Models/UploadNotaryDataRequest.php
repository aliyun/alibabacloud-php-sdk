<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Trademark\V20180724\Models;

use AlibabaCloud\Tea\Model;

class UploadNotaryDataRequest extends Model
{
    /**
     * @var int
     */
    public $notaryType;

    /**
     * @var string
     */
    public $bizOrderNo;

    /**
     * @var string
     */
    public $uploadContext;
    protected $_name = [
        'notaryType'    => 'NotaryType',
        'bizOrderNo'    => 'BizOrderNo',
        'uploadContext' => 'UploadContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->notaryType) {
            $res['NotaryType'] = $this->notaryType;
        }
        if (null !== $this->bizOrderNo) {
            $res['BizOrderNo'] = $this->bizOrderNo;
        }
        if (null !== $this->uploadContext) {
            $res['UploadContext'] = $this->uploadContext;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadNotaryDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NotaryType'])) {
            $model->notaryType = $map['NotaryType'];
        }
        if (isset($map['BizOrderNo'])) {
            $model->bizOrderNo = $map['BizOrderNo'];
        }
        if (isset($map['UploadContext'])) {
            $model->uploadContext = $map['UploadContext'];
        }

        return $model;
    }
}
