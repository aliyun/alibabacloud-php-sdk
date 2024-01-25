<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiops\V20200806\Models;

use AlibabaCloud\Tea\Model;

class GetRiskInAllRequest extends Model
{
    /**
     * @var string
     */
    public $operaUid;

    /**
     * @var int
     */
    public $screen;
    protected $_name = [
        'operaUid' => 'OperaUid',
        'screen'   => 'Screen',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operaUid) {
            $res['OperaUid'] = $this->operaUid;
        }
        if (null !== $this->screen) {
            $res['Screen'] = $this->screen;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRiskInAllRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OperaUid'])) {
            $model->operaUid = $map['OperaUid'];
        }
        if (isset($map['Screen'])) {
            $model->screen = $map['Screen'];
        }

        return $model;
    }
}
