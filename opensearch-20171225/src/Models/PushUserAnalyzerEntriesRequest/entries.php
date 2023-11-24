<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushUserAnalyzerEntriesRequest;

use AlibabaCloud\Tea\Model;

class entries extends Model
{
    /**
     * @description The operation to be performed on the entries.
     *
     * Valid values:
     *
     *   add
     *   delete
     *
     * @example "add"
     *
     * @var string
     */
    public $cmd;

    /**
     * @description The key to be used to query entries.
     *
     * @example "testvalue"
     *
     * @var string
     */
    public $key;

    /**
     * @description Specifies whether to further analyze the terms that are generated after the search query is analyzed.
     *
     * Default value: true.
     * @example true
     *
     * @var bool
     */
    public $splitEnabled;

    /**
     * @description The analysis result.
     *
     * @example "test value"
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'cmd'          => 'cmd',
        'key'          => 'key',
        'splitEnabled' => 'splitEnabled',
        'value'        => 'value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cmd) {
            $res['cmd'] = $this->cmd;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
        }
        if (null !== $this->splitEnabled) {
            $res['splitEnabled'] = $this->splitEnabled;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entries
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cmd'])) {
            $model->cmd = $map['cmd'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }
        if (isset($map['splitEnabled'])) {
            $model->splitEnabled = $map['splitEnabled'];
        }
        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
