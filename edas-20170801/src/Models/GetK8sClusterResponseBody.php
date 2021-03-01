<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponseBody\clusterPage;
use AlibabaCloud\Tea\Model;

class GetK8sClusterResponseBody extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var clusterPage
     */
    public $clusterPage;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'     => 'Message',
        'requestId'   => 'RequestId',
        'clusterPage' => 'ClusterPage',
        'code'        => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clusterPage) {
            $res['ClusterPage'] = null !== $this->clusterPage ? $this->clusterPage->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetK8sClusterResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterPage'])) {
            $model->clusterPage = clusterPage::fromMap($map['ClusterPage']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
