<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\DeleteAggregateRemediationsResponseBody;

use AlibabaCloud\Dara\Model;

class remediationDeleteResults extends Model
{
    /**
     * @var string
     */
    public $errorMessage;
    /**
     * @var string
     */
    public $remediationId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'errorMessage'  => 'ErrorMessage',
        'remediationId' => 'RemediationId',
        'success'       => 'Success',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }

        if (null !== $this->remediationId) {
            $res['RemediationId'] = $this->remediationId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }

        if (isset($map['RemediationId'])) {
            $model->remediationId = $map['RemediationId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
