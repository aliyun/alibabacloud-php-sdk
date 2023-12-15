<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudIntegrationServiceTokenResponseBody;

use AlibabaCloud\SDK\Baas\V20180731\Models\DescribeCloudIntegrationServiceTokenResponseBody\result\history;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var history[]
     */
    public $history;

    /**
     * @var string
     */
    public $service;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'history' => 'History',
        'service' => 'Service',
        'token'   => 'Token',
        'type'    => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->history) {
            $res['History'] = [];
            if (null !== $this->history && \is_array($this->history)) {
                $n = 0;
                foreach ($this->history as $item) {
                    $res['History'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->service) {
            $res['Service'] = $this->service;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['History'])) {
            if (!empty($map['History'])) {
                $model->history = [];
                $n              = 0;
                foreach ($map['History'] as $item) {
                    $model->history[$n++] = null !== $item ? history::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Service'])) {
            $model->service = $map['Service'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
