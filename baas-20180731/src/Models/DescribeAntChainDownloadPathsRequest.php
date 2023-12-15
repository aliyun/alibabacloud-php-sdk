<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models;

use AlibabaCloud\Tea\Model;

class DescribeAntChainDownloadPathsRequest extends Model
{
    /**
     * @var string
     */
    public $antChainId;
    protected $_name = [
        'antChainId' => 'AntChainId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAntChainDownloadPathsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AntChainId'])) {
            $model->antChainId = $map['AntChainId'];
        }

        return $model;
    }
}
