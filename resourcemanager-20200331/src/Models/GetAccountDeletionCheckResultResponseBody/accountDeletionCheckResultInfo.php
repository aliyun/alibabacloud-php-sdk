<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponseBody\accountDeletionCheckResultInfo\abandonableChecks;
use AlibabaCloud\SDK\ResourceManager\V20200331\Models\GetAccountDeletionCheckResultResponseBody\accountDeletionCheckResultInfo\notAllowReason;

class accountDeletionCheckResultInfo extends Model
{
    /**
     * @var abandonableChecks[]
     */
    public $abandonableChecks;
    /**
     * @var string
     */
    public $allowDelete;
    /**
     * @var notAllowReason[]
     */
    public $notAllowReason;
    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'abandonableChecks' => 'AbandonableChecks',
        'allowDelete'       => 'AllowDelete',
        'notAllowReason'    => 'NotAllowReason',
        'status'            => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->abandonableChecks)) {
            Model::validateArray($this->abandonableChecks);
        }
        if (\is_array($this->notAllowReason)) {
            Model::validateArray($this->notAllowReason);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abandonableChecks) {
            if (\is_array($this->abandonableChecks)) {
                $res['AbandonableChecks'] = [];
                $n1                       = 0;
                foreach ($this->abandonableChecks as $item1) {
                    $res['AbandonableChecks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->allowDelete) {
            $res['AllowDelete'] = $this->allowDelete;
        }

        if (null !== $this->notAllowReason) {
            if (\is_array($this->notAllowReason)) {
                $res['NotAllowReason'] = [];
                $n1                    = 0;
                foreach ($this->notAllowReason as $item1) {
                    $res['NotAllowReason'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AbandonableChecks'])) {
            if (!empty($map['AbandonableChecks'])) {
                $model->abandonableChecks = [];
                $n1                       = 0;
                foreach ($map['AbandonableChecks'] as $item1) {
                    $model->abandonableChecks[$n1++] = abandonableChecks::fromMap($item1);
                }
            }
        }

        if (isset($map['AllowDelete'])) {
            $model->allowDelete = $map['AllowDelete'];
        }

        if (isset($map['NotAllowReason'])) {
            if (!empty($map['NotAllowReason'])) {
                $model->notAllowReason = [];
                $n1                    = 0;
                foreach ($map['NotAllowReason'] as $item1) {
                    $model->notAllowReason[$n1++] = notAllowReason::fromMap($item1);
                }
            }
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
