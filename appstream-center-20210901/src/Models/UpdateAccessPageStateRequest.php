<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models;

use AlibabaCloud\Tea\Model;

class UpdateAccessPageStateRequest extends Model
{
    /**
     * @example a-06xnr5lyp77e7****
     *
     * @var string
     */
    public $accessPageId;

    /**
     * @example 1
     *
     * @var int
     */
    public $accessPageState;
    protected $_name = [
        'accessPageId'    => 'AccessPageId',
        'accessPageState' => 'AccessPageState',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessPageId) {
            $res['AccessPageId'] = $this->accessPageId;
        }
        if (null !== $this->accessPageState) {
            $res['AccessPageState'] = $this->accessPageState;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAccessPageStateRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessPageId'])) {
            $model->accessPageId = $map['AccessPageId'];
        }
        if (isset($map['AccessPageState'])) {
            $model->accessPageState = $map['AccessPageState'];
        }

        return $model;
    }
}
