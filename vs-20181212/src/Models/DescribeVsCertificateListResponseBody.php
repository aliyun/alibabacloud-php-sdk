<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\DescribeVsCertificateListResponseBody\certificateListModel;

class DescribeVsCertificateListResponseBody extends Model
{
    /**
     * @var certificateListModel
     */
    public $certificateListModel;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'certificateListModel' => 'CertificateListModel',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->certificateListModel) {
            $this->certificateListModel->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->certificateListModel) {
            $res['CertificateListModel'] = null !== $this->certificateListModel ? $this->certificateListModel->toArray($noStream) : $this->certificateListModel;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['CertificateListModel'])) {
            $model->certificateListModel = certificateListModel::fromMap($map['CertificateListModel']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
