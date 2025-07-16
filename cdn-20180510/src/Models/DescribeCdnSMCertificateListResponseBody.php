<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeCdnSMCertificateListResponseBody\certificateListModel;
use AlibabaCloud\Tea\Model;

class DescribeCdnSMCertificateListResponseBody extends Model
{
    /**
     * @description The type of the certificate information.
     *
     * @var certificateListModel
     */
    public $certificateListModel;

    /**
     * @description The ID of the request.
     *
     * @example DC0E34AC-0239-44A7-AB0E-800DE522C8DC
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificateListModel' => 'CertificateListModel',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->certificateListModel) {
            $res['CertificateListModel'] = null !== $this->certificateListModel ? $this->certificateListModel->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCdnSMCertificateListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CertificateListModel'])) {
            $model->certificateListModel = certificateListModel::fromMap($map['CertificateListModel']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
