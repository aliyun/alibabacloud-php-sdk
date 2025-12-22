<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenSearch\V20171225\Models\PushUserAnalyzerEntriesRequest\entries;

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
        'dryRun' => 'dryRun',
    ];

    public function validate()
    {
        if (\is_array($this->entries)) {
            Model::validateArray($this->entries);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->entries) {
            if (\is_array($this->entries)) {
                $res['entries'] = [];
                $n1 = 0;
                foreach ($this->entries as $item1) {
                    $res['entries'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dryRun) {
            $res['dryRun'] = $this->dryRun;
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
        if (isset($map['entries'])) {
            if (!empty($map['entries'])) {
                $model->entries = [];
                $n1 = 0;
                foreach ($map['entries'] as $item1) {
                    $model->entries[$n1] = entries::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['dryRun'])) {
            $model->dryRun = $map['dryRun'];
        }

        return $model;
    }
}
