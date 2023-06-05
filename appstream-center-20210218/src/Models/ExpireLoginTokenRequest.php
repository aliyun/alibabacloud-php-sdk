<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210218\Models;

use AlibabaCloud\Tea\Model;

class ExpireLoginTokenRequest extends Model
{
    /**
     * @example testuser
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example v185fdd7f6d39fa7861981639366085772e150a390a5bb7b43c4e62440d94fc392b945770e1596cebe90085ce0af4d****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example cn-beijing+dir-172301****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example a863f4c3-2f1d-4971-8cf7-e2b92ae9****
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'endUserId'    => 'EndUserId',
        'loginToken'   => 'LoginToken',
        'officeSiteId' => 'OfficeSiteId',
        'sessionId'    => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ExpireLoginTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
