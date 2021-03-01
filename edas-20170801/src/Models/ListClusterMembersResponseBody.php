<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListClusterMembersResponseBody\clusterMemberPage;
use AlibabaCloud\Tea\Model;

class ListClusterMembersResponseBody extends Model
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
     * @var clusterMemberPage
     */
    public $clusterMemberPage;

    /**
     * @var int
     */
    public $code;
    protected $_name = [
        'message'           => 'Message',
        'requestId'         => 'RequestId',
        'clusterMemberPage' => 'ClusterMemberPage',
        'code'              => 'Code',
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
        if (null !== $this->clusterMemberPage) {
            $res['ClusterMemberPage'] = null !== $this->clusterMemberPage ? $this->clusterMemberPage->toMap() : null;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
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
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClusterMemberPage'])) {
            $model->clusterMemberPage = clusterMemberPage::fromMap($map['ClusterMemberPage']);
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
