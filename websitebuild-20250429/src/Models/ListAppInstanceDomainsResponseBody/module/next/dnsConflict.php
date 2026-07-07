<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WebsiteBuild\V20250429\Models\ListAppInstanceDomainsResponseBody\module\next\dnsConflict\records;

class dnsConflict extends Model
{
    /**
     * @var bool
     */
    public $canAutoResolve;

    /**
     * @var bool
     */
    public $hasConflict;

    /**
     * @var string
     */
    public $message;

    /**
     * @var records[]
     */
    public $records;
    protected $_name = [
        'canAutoResolve' => 'CanAutoResolve',
        'hasConflict' => 'HasConflict',
        'message' => 'Message',
        'records' => 'Records',
    ];

    public function validate()
    {
        if (\is_array($this->records)) {
            Model::validateArray($this->records);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canAutoResolve) {
            $res['CanAutoResolve'] = $this->canAutoResolve;
        }

        if (null !== $this->hasConflict) {
            $res['HasConflict'] = $this->hasConflict;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->records) {
            if (\is_array($this->records)) {
                $res['Records'] = [];
                $n1 = 0;
                foreach ($this->records as $item1) {
                    $res['Records'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['CanAutoResolve'])) {
            $model->canAutoResolve = $map['CanAutoResolve'];
        }

        if (isset($map['HasConflict'])) {
            $model->hasConflict = $map['HasConflict'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['Records'])) {
            if (!empty($map['Records'])) {
                $model->records = [];
                $n1 = 0;
                foreach ($map['Records'] as $item1) {
                    $model->records[$n1] = records::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
