<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\CreateDialogResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $openingRemarks;

    /**
     * @example 1728545917713234
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'openingRemarks' => 'openingRemarks',
        'sessionId'      => 'sessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openingRemarks) {
            $res['openingRemarks'] = $this->openingRemarks;
        }
        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['openingRemarks'])) {
            $model->openingRemarks = $map['openingRemarks'];
        }
        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        return $model;
    }
}
