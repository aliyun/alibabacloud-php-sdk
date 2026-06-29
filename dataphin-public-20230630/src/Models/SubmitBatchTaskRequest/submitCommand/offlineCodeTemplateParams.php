<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\SubmitBatchTaskRequest\submitCommand;

use AlibabaCloud\Dara\Model;

class offlineCodeTemplateParams extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var bool
     */
    public $encryptEnabled;

    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'description' => 'Description',
        'encryptEnabled' => 'EncryptEnabled',
        'key' => 'Key',
        'value' => 'Value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encryptEnabled) {
            $res['EncryptEnabled'] = $this->encryptEnabled;
        }

        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->value) {
            $res['Value'] = $this->value;
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncryptEnabled'])) {
            $model->encryptEnabled = $map['EncryptEnabled'];
        }

        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
