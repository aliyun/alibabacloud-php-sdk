<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveCertificateListResponseBody\certificateListModel;
use AlibabaCloud\Tea\Model;

class DescribeLiveCertificateListResponseBody extends Model
{
    /**
     * @description The details.
     *
     * @var certificateListModel
     */
    public $certificateListModel;

    /**
     * @description The request ID.
     *
     * @example 16A96B9A-F203-4EC5-8E43-CB92E68F4CD8
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
     * @return DescribeLiveCertificateListResponseBody
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
