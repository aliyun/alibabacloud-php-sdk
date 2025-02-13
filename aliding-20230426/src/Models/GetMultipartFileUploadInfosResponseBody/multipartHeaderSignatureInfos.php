<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetMultipartFileUploadInfosResponseBody\multipartHeaderSignatureInfos\headerSignatureInfo;

class multipartHeaderSignatureInfos extends Model
{
    /**
     * @var headerSignatureInfo
     */
    public $headerSignatureInfo;
    /**
     * @var int
     */
    public $partNumber;
    protected $_name = [
        'headerSignatureInfo' => 'HeaderSignatureInfo',
        'partNumber'          => 'PartNumber',
    ];

    public function validate()
    {
        if (null !== $this->headerSignatureInfo) {
            $this->headerSignatureInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->headerSignatureInfo) {
            $res['HeaderSignatureInfo'] = null !== $this->headerSignatureInfo ? $this->headerSignatureInfo->toArray($noStream) : $this->headerSignatureInfo;
        }

        if (null !== $this->partNumber) {
            $res['PartNumber'] = $this->partNumber;
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
        if (isset($map['HeaderSignatureInfo'])) {
            $model->headerSignatureInfo = headerSignatureInfo::fromMap($map['HeaderSignatureInfo']);
        }

        if (isset($map['PartNumber'])) {
            $model->partNumber = $map['PartNumber'];
        }

        return $model;
    }
}
