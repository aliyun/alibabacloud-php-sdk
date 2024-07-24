<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusRemoteWritesResponseBody\data;
use AlibabaCloud\Tea\Model;

class ListPrometheusRemoteWritesResponseBody extends Model
{
    /**
     * @description The HTTP status code that is returned. The HTTP status code 200 indicates that the call was successful. Otherwise, the call fails.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The remote write configuration items returned.
     *
     * @example [
     * "name": "TiDBxxx",
     * "yaml": "remote_write:\\\\n- basic_auth: {password: \\"******\\", username: xxx}\\\\n  name: TiDBxxx\\\\n  write_relabel_configs:\\\\n  - regex: si-6e2ca86444db4e55a7c1\\\\n    source_labels: [instance_id]\\\\n    action: keep\\\\n    separator: ;\\\\n    replacement: $1\\\\n  url: http://xxx:8080/prometheus/xxx/ddd/cn-hangzhou/api/v3/write\\\\n"
     * "name": "TiDBxxx1",
     * "yaml": "remote_write:\\\\n- basic_auth: {password: \\"******\\", username: xxx}\\\\n  name: TiDBxxx1\\\\n  write_relabel_configs:\\\\n  - regex: si-6e2ca86444db4e55a7c1\\\\n    source_labels: [instance_id]\\\\n    action: keep\\\\n    separator: ;\\\\n    replacement: $1\\\\n  url: http://xxx:8080/prometheus/xxx/ddd/cn-hangzhou/api/v3/write\\\\n"
     * ]
     * @var data[]
     */
    public $data;

    /**
     * @description The message returned.
     *
     * @example message
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the request.
     *
     * @example 9319A57D-2D9E-472A-B69B-CF3CD16D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the call was successful. Valid values: true and false.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'      => 'Code',
        'data'      => 'Data',
        'message'   => 'Message',
        'requestId' => 'RequestId',
        'success'   => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = [];
            if (null !== $this->data && \is_array($this->data)) {
                $n = 0;
                foreach ($this->data as $item) {
                    $res['Data'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPrometheusRemoteWritesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            if (!empty($map['Data'])) {
                $model->data = [];
                $n           = 0;
                foreach ($map['Data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
