<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\task\artifacts;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\task\history;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageResponseBody\task\status;

class task extends Model
{
    /**
     * @var artifacts[]
     */
    public $artifacts;

    /**
     * @var string
     */
    public $contextId;

    /**
     * @var history[]
     */
    public $history;

    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var status
     */
    public $status;
    protected $_name = [
        'artifacts' => 'Artifacts',
        'contextId' => 'ContextId',
        'history' => 'History',
        'id' => 'Id',
        'metadata' => 'Metadata',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->artifacts)) {
            Model::validateArray($this->artifacts);
        }
        if (\is_array($this->history)) {
            Model::validateArray($this->history);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->status) {
            $this->status->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->artifacts) {
            if (\is_array($this->artifacts)) {
                $res['Artifacts'] = [];
                $n1 = 0;
                foreach ($this->artifacts as $item1) {
                    $res['Artifacts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contextId) {
            $res['ContextId'] = $this->contextId;
        }

        if (null !== $this->history) {
            if (\is_array($this->history)) {
                $res['History'] = [];
                $n1 = 0;
                foreach ($this->history as $item1) {
                    $res['History'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = null !== $this->status ? $this->status->toArray($noStream) : $this->status;
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
        if (isset($map['Artifacts'])) {
            if (!empty($map['Artifacts'])) {
                $model->artifacts = [];
                $n1 = 0;
                foreach ($map['Artifacts'] as $item1) {
                    $model->artifacts[$n1] = artifacts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ContextId'])) {
            $model->contextId = $map['ContextId'];
        }

        if (isset($map['History'])) {
            if (!empty($map['History'])) {
                $model->history = [];
                $n1 = 0;
                foreach ($map['History'] as $item1) {
                    $model->history[$n1] = history::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = status::fromMap($map['Status']);
        }

        return $model;
    }
}
