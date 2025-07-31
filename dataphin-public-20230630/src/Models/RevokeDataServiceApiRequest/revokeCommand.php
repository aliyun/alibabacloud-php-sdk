<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\RevokeDataServiceApiRequest;

use AlibabaCloud\Tea\Model;

class revokeCommand extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1021
     *
     * @var int
     */
    public $apiId;

    /**
     * @description This parameter is required.
     *
     * @example 1203
     *
     * @var int
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'apiId' => 'ApiId',
        'appId' => 'AppId',
        'reason' => 'Reason',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return revokeCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
