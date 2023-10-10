<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\GetK8sClusterResponseBody\clusterPage;
use AlibabaCloud\Tea\Model;

class GetK8sClusterResponseBody extends Model
{
    /**
     * @description The cluster data that is returned by page.
     *
     * @var clusterPage
     */
    public $clusterPage;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The additional information that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example C3CE915C-0C83-4AA5-8D66-E8BEED62939E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterPage' => 'ClusterPage',
        'code'        => 'Code',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterPage) {
            $res['ClusterPage'] = null !== $this->clusterPage ? $this->clusterPage->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['ClusterPage'])) {
            $model->clusterPage = clusterPage::fromMap($map['ClusterPage']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
