<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\GetWorkspacesResponseBody\workspace;

class GetWorkspacesResponseBody extends Model
{
    /**
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
        if (\is_array($this->workspace)) {
            Model::validateArray($this->workspace);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->workspace) {
            if (\is_array($this->workspace)) {
                $res['workspace'] = [];
                $n1               = 0;
                foreach ($this->workspace as $item1) {
                    $res['workspace'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['workspace'])) {
            if (!empty($map['workspace'])) {
                $model->workspace = [];
                $n1               = 0;
                foreach ($map['workspace'] as $item1) {
                    $model->workspace[$n1++] = workspace::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
