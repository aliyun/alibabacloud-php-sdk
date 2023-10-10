<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage;
use AlibabaCloud\Tea\Model;

class ListClusterMembersResponseBody extends Model
{
    /**
     * @description The information about the ECS instances in the cluster.
     *
     * @var clusterMemberPage
     */
    public $clusterMemberPage;

    /**
     * @description The HTTP status code that is returned.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The message that is returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example b197-40ab-9155-****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'clusterMemberPage' => 'ClusterMemberPage',
        'code'              => 'Code',
        'message'           => 'Message',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterMemberPage) {
            $res['ClusterMemberPage'] = null !== $this->clusterMemberPage ? $this->clusterMemberPage->toMap() : null;
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
     * @return ListClusterMembersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterMemberPage'])) {
            $model->clusterMemberPage = clusterMemberPage::fromMap($map['ClusterMemberPage']);
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
