<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Dara\Model;

class ApplyResourceAccessPermissionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applyContentsShrink;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $reason;
    protected $_name = [
        'applyContentsShrink' => 'ApplyContents',
        'clientToken' => 'ClientToken',
        'reason' => 'Reason',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applyContentsShrink) {
            $res['ApplyContents'] = $this->applyContentsShrink;
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
            $model->applyContentsShrink = $map['ApplyContents'];
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
