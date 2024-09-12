<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageAnalyzeTaskStatusResponseBody;

use AlibabaCloud\Tea\Model;

class usage extends Model
{
    /**
     * @var int
     */
    public $pvCount;

    /**
     * @var int
     */
    public $tokenCount;
    protected $_name = [
        'pvCount'    => 'pv_count',
        'tokenCount' => 'token_count',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pvCount) {
            $res['pv_count'] = $this->pvCount;
        }
        if (null !== $this->tokenCount) {
            $res['token_count'] = $this->tokenCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return usage
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['pv_count'])) {
            $model->pvCount = $map['pv_count'];
        }
        if (isset($map['token_count'])) {
            $model->tokenCount = $map['token_count'];
        }

        return $model;
    }
}
