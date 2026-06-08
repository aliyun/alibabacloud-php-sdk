<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dataworkspublic\V20240518\Models\ApplyResourceAccessPermissionRequest\applyContents;

class ApplyResourceAccessPermissionRequest extends Model
{
    /**
     * @var applyContents[]
     */
    public $applyContents;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'applyContents' => 'ApplyContents',
        'clientToken' => 'ClientToken',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        if (\is_array($this->applyContents)) {
            Model::validateArray($this->applyContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyContents) {
            if (\is_array($this->applyContents)) {
                $res['ApplyContents'] = [];
                $n1 = 0;
                foreach ($this->applyContents as $item1) {
                    $res['ApplyContents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
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
        if (isset($map['ApplyContents'])) {
            if (!empty($map['ApplyContents'])) {
                $model->applyContents = [];
                $n1 = 0;
                foreach ($map['ApplyContents'] as $item1) {
                    $model->applyContents[$n1] = applyContents::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }

        return $model;
    }
}
