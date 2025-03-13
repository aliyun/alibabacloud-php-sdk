<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class StopAvatarSessionRequest extends Model
{
    /**
     * @example 124900036
     *
     * @var string
     */
    public $projectId;

    /**
     * @example 121dlsga4o7golrl1hojazg0u9lvysk0uyczgd79be2a4hkr9ijrblmb5qohi5iaja3p5j633doqj4t2uu3sek2i49hzkao0bli4bch4tnloyx22odd7sot9dxl5xfd0hbp7fl9dehnqofkb9csebf0nuezj8bwgec8ei6dby0encu5y88ky6oqensuqnj
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'projectId' => 'projectId',
        'sessionId' => 'sessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['projectId'] = $this->projectId;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return StopAvatarSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['projectId'])) {
            $model->projectId = $map['projectId'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
