<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiRecService\V20221213\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiRecService\V20221213\Models\CreateRecallManagementServiceVersionRequest\configs;

class CreateRecallManagementServiceVersionRequest extends Model
{
    /**
     * @var configs
     */
    public $configs;

    /**
     * @var string
     */
    public $sourceRecallManagementServiceVersionId;
    protected $_name = [
        'configs' => 'Configs',
        'sourceRecallManagementServiceVersionId' => 'SourceRecallManagementServiceVersionId',
    ];

    public function validate()
    {
        if (null !== $this->configs) {
            $this->configs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->configs) {
            $res['Configs'] = null !== $this->configs ? $this->configs->toArray($noStream) : $this->configs;
        }

        if (null !== $this->sourceRecallManagementServiceVersionId) {
            $res['SourceRecallManagementServiceVersionId'] = $this->sourceRecallManagementServiceVersionId;
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
        if (isset($map['Configs'])) {
            $model->configs = configs::fromMap($map['Configs']);
        }

        if (isset($map['SourceRecallManagementServiceVersionId'])) {
            $model->sourceRecallManagementServiceVersionId = $map['SourceRecallManagementServiceVersionId'];
        }

        return $model;
    }
}
