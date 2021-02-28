<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Scdn\V20171115\Models;

use AlibabaCloud\SDK\Scdn\V20171115\Models\DescribeScdnCertificateListResponseBody\certificateListModel;
use AlibabaCloud\Tea\Model;

class DescribeScdnCertificateListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var certificateListModel
     */
    public $certificateListModel;
    protected $_name = [
        'requestId'            => 'RequestId',
        'certificateListModel' => 'CertificateListModel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->certificateListModel) {
            $res['CertificateListModel'] = null !== $this->certificateListModel ? $this->certificateListModel->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeScdnCertificateListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertificateListModel'])) {
            $model->certificateListModel = certificateListModel::fromMap($map['CertificateListModel']);
        }

        return $model;
    }
}
