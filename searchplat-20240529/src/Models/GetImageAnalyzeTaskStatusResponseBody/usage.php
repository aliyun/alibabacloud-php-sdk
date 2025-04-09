<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchplat\V20240529\Models\GetImageAnalyzeTaskStatusResponseBody;

use AlibabaCloud\Dara\Model;

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
        'pvCount' => 'pv_count',
        'tokenCount' => 'token_count',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
