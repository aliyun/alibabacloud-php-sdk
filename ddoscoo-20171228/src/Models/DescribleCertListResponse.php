<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribleCertListResponse\certList;
use AlibabaCloud\Tea\Model;

class DescribleCertListResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var certList[]
     */
    public $certList;
    protected $_name = [
        'requestId' => 'RequestId',
        'certList'  => 'CertList',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('certList', $this->certList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->certList) {
            $res['CertList'] = [];
            if (null !== $this->certList && \is_array($this->certList)) {
                $n = 0;
                foreach ($this->certList as $item) {
                    $res['CertList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribleCertListResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['CertList'])) {
            if (!empty($map['CertList'])) {
                $model->certList = [];
                $n               = 0;
                foreach ($map['CertList'] as $item) {
                    $model->certList[$n++] = null !== $item ? certList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
