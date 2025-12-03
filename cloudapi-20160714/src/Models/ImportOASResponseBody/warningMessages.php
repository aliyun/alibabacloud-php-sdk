<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\ImportOASResponseBody;

use AlibabaCloud\Dara\Model;

class warningMessages extends Model
{
    /**
     * @var string[]
     */
    public $warningMessage;
    protected $_name = [
        'warningMessage' => 'WarningMessage',
    ];

    public function validate()
    {
        if (\is_array($this->warningMessage)) {
            Model::validateArray($this->warningMessage);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->warningMessage) {
            if (\is_array($this->warningMessage)) {
                $res['WarningMessage'] = [];
                $n1 = 0;
                foreach ($this->warningMessage as $item1) {
                    $res['WarningMessage'][$n1] = $item1;
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
        if (isset($map['WarningMessage'])) {
            if (!empty($map['WarningMessage'])) {
                $model->warningMessage = [];
                $n1 = 0;
                foreach ($map['WarningMessage'] as $item1) {
                    $model->warningMessage[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
