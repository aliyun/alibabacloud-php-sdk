<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20181221\Models;

use AlibabaCloud\Tea\Model;

class UpdateAntChainRequest extends Model
{
    /**
     * @example pYogqb9v
     *
     * @var string
     */
    public $antChainId;

    /**
     * @var string
     */
    public $antChainName;
    protected $_name = [
        'antChainId'   => 'AntChainId',
        'antChainName' => 'AntChainName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->antChainId) {
            $res['AntChainId'] = $this->antChainId;
        }
        if (null !== $this->antChainName) {
            $res['AntChainName'] = $this->antChainName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateAntChainRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }
        if (isset($map['AntChainName'])) {
            $model->antChainName = $map['AntChainName'];
        }

        return $model;
    }
}
