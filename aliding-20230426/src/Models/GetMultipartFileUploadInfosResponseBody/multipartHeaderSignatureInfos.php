<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosResponseBody;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosResponseBody\multipartHeaderSignatureInfos\headerSignatureInfo;
use AlibabaCloud\Tea\Model;

class multipartHeaderSignatureInfos extends Model
{
    /**
     * @var headerSignatureInfo
     */
    public $headerSignatureInfo;

    /**
     * @example 1
     *
     * @var int
     */
    public $partNumber;
    protected $_name = [
        'headerSignatureInfo' => 'HeaderSignatureInfo',
        'partNumber'          => 'PartNumber',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->headerSignatureInfo) {
            $res['HeaderSignatureInfo'] = null !== $this->headerSignatureInfo ? $this->headerSignatureInfo->toMap() : null;
        }
        if (null !== $this->partNumber) {
            $res['PartNumber'] = $this->partNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return multipartHeaderSignatureInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HeaderSignatureInfo'])) {
            $model->headerSignatureInfo = headerSignatureInfo::fromMap($map['HeaderSignatureInfo']);
        }
        if (isset($map['PartNumber'])) {
            $model->partNumber = $map['PartNumber'];
        }

        return $model;
    }
}
