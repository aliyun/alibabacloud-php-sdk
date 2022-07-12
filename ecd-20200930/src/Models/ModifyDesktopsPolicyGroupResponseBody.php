<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\SDK\Ecd\V20200930\Models\ModifyDesktopsPolicyGroupResponseBody\modifyResults;
use AlibabaCloud\Tea\Model;

class ModifyDesktopsPolicyGroupResponseBody extends Model
{
    /**
     * @var modifyResults[]
     */
    public $modifyResults;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'modifyResults' => 'ModifyResults',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->modifyResults) {
            $res['ModifyResults'] = [];
            if (null !== $this->modifyResults && \is_array($this->modifyResults)) {
                $n = 0;
                foreach ($this->modifyResults as $item) {
                    $res['ModifyResults'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyDesktopsPolicyGroupResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModifyResults'])) {
            if (!empty($map['ModifyResults'])) {
                $model->modifyResults = [];
                $n                    = 0;
                foreach ($map['ModifyResults'] as $item) {
                    $model->modifyResults[$n++] = null !== $item ? modifyResults::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
