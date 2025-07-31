<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\ApplyDataServiceAppRequest;

use AlibabaCloud\Tea\Model;

class applyCommand extends Model
{
    /**
     * @description appId
     *
     * This parameter is required.
     *
     * @example 2011
     *
     * @var int
     */
    public $appId;

    /**
     * @description This parameter is required.
     *
     * @example 2025-06-30
     *
     * @var string
     */
    public $expireDate;

    /**
     * @description This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $reason;
    protected $_name = [
        'appId' => 'AppId',
        'expireDate' => 'ExpireDate',
        'reason' => 'Reason',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->expireDate) {
            $res['ExpireDate'] = $this->expireDate;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return applyCommand
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ExpireDate'])) {
            $model->expireDate = $map['ExpireDate'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
