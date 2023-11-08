<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\BatchGetFormDataByIdListHeaders\accountContext;
use AlibabaCloud\Tea\Model;

class BatchGetFormDataByIdListHeaders extends Model
{
    public $commonHeaders;

    /**
     * @var accountContext
     */
    public $accountContext;
    protected $_name = [
        'accountContext' => 'AccountContext',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commonHeaders) {
            $res['commonHeaders'] = $this->commonHeaders;
        }
        if (null !== $this->accountContext) {
            $res['AccountContext'] = null !== $this->accountContext ? $this->accountContext->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetFormDataByIdListHeaders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['commonHeaders'])) {
            $model->commonHeaders = $map['commonHeaders'];
        }
        if (isset($map['AccountContext'])) {
            $model->accountContext = accountContext::fromMap($map['AccountContext']);
        }

        return $model;
    }
}
