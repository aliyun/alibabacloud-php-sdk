<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushUserAnalyzerEntriesRequest\entries;
use AlibabaCloud\Tea\Model;

class PushUserAnalyzerEntriesRequest extends Model
{
    /**
     * @var entries[]
     */
    public $entries;

    /**
     * @var bool
     */
    public $dryRun;
    protected $_name = [
        'entries' => 'entries',
        'dryRun'  => 'dryRun',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->entries) {
            $res['entries'] = [];
            if (null !== $this->entries && \is_array($this->entries)) {
                $n = 0;
                foreach ($this->entries as $item) {
                    $res['entries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PushUserAnalyzerEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['entries'])) {
            if (!empty($map['entries'])) {
                $model->entries = [];
                $n              = 0;
                foreach ($map['entries'] as $item) {
                    $model->entries[$n++] = null !== $item ? entries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
