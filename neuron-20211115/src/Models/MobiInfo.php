<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Neuron\V20211115\Models;

use AlibabaCloud\Dara\Model;

class MobiInfo extends Model
{
    /**
     * @var string
     */
    public $mobiCommitId;

    /**
     * @var int
     */
    public $mobiId;

    /**
     * @var string
     */
    public $mobiModuleId;

    /**
     * @var string
     */
    public $storeUrl;
    protected $_name = [
        'mobiCommitId' => 'mobiCommitId',
        'mobiId' => 'mobiId',
        'mobiModuleId' => 'mobiModuleId',
        'storeUrl' => 'storeUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->mobiCommitId) {
            $res['mobiCommitId'] = $this->mobiCommitId;
        }

        if (null !== $this->mobiId) {
            $res['mobiId'] = $this->mobiId;
        }

        if (null !== $this->mobiModuleId) {
            $res['mobiModuleId'] = $this->mobiModuleId;
        }

        if (null !== $this->storeUrl) {
            $res['storeUrl'] = $this->storeUrl;
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
        if (isset($map['mobiCommitId'])) {
            $model->mobiCommitId = $map['mobiCommitId'];
        }

        if (isset($map['mobiId'])) {
            $model->mobiId = $map['mobiId'];
        }

        if (isset($map['mobiModuleId'])) {
            $model->mobiModuleId = $map['mobiModuleId'];
        }

        if (isset($map['storeUrl'])) {
            $model->storeUrl = $map['storeUrl'];
        }

        return $model;
    }
}
