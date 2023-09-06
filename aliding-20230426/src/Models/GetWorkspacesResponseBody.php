<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesResponseBody\workspace;
use AlibabaCloud\Tea\Model;

class GetWorkspacesResponseBody extends Model
{
    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
     * @var string
     */
    public $requestId;

    /**
     * @var workspace[]
     */
    public $workspace;
    protected $_name = [
        'requestId' => 'requestId',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->workspace) {
            $res['workspace'] = [];
            if (null !== $this->workspace && \is_array($this->workspace)) {
                $n = 0;
                foreach ($this->workspace as $item) {
                    $res['workspace'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetWorkspacesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }
        if (isset($map['workspace'])) {
            if (!empty($map['workspace'])) {
                $model->workspace = [];
                $n                = 0;
                foreach ($map['workspace'] as $item) {
                    $model->workspace[$n++] = null !== $item ? workspace::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
